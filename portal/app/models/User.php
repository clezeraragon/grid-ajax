<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

class User extends SentryModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = array('perfil_id','email', 'password', 'first_name', 'last_name', 'dt_nascimento', 'genero', 'utm_source', 'utm_medium', 'utm_term', 'utm_content', 'utm_campaign');

    protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * Regras de validação de formulario
     * @var array
     */
    public static $rules = array(
        'first_name'       => 'required|min:3',
        'last_name'        => 'required|min:3',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|between:5,32',
        'password_confirm' => 'required|same:password',
        'dt_nascimento'    => 'required|date_format:"d/m/Y"|before:"now"',
        'genero'           => 'required|max:1',
    );

    public static function getRules(){
        return self::$rules;
    }

    public function validateUser($data)
    {
        //Quando for update, permite ter o mesmo nome de perfil, desde que seja o mesmo id
        if(Request::getMethod() == 'PUT') {
            $id = Request::segment(3);
            self::$rules['email'] .= ",$id";

            if($data['password'] === '') {
                unset(self::$rules['password']);
                unset(self::$rules['password_confirm']);
            }
        }
        return Validator::make($data, self::$rules);
    }

    public function perfil()
    {
        return $this->belongsTo('Perfil', 'perfil_id');
    }
}
