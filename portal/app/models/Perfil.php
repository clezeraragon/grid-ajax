<?php

class Perfil extends BaseModel
{
    protected $table = 'usuario_perfis';

    protected $guarded = array('id');

    protected $fillable = array('perfil','descricao', 'st_admin');

    public static $rules = array(
        'perfil' => 'required|min:3|max:100|unique:usuario_perfis,perfil',
        'descricao' => 'required|min:3|max:255',
        'st_admin' => 'required|boolean',
        'funcionalidades_ids' => 'required|array',
    );

    public static function validate($data)
    {
        //Quando for update, permite ter o mesmo nome de perfil, desde que seja o mesmo id
        if(Request::getMethod() == 'PUT') {
            $id = Request::segment(3);
            self::$rules['perfil'] .= ",$id";
        }

        return Validator::make($data, self::$rules);
    }

    public function funcionalidades()
    {
        return $this->belongsToMany('Funcionalidade', 'usuario_funcionalidades_perfis','perfil_id',  'funcionalidade_id');
    }

    public static function options()
    {
        $result = static::orderBy('perfil')->lists('perfil', 'id');

        return array('' => 'Selecione uma opção') + $result;
    }

}