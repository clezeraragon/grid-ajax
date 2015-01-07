<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 24/10/2014
 * Time: 17:05
 */

class Cliente extends Eloquent
{
    protected $table = 'cliente';
    protected $guarded = array('id');
//    protected $fillable = ['txt_resumo'];

    public  static $rules = array(


        'nm_razao_social' => 'required|min:2',
        'nm_responsavel' => 'required|min:5',
        'nm_cnpj' => 'required|min:14',
        'nm_telefone1' => 'required|min:14|max:15',
        'nm_telefone2' => 'required|min:14|max:15',
        'nm_email_responsavel' => 'required',
        'nm_cep' => 'required|min:8'


    );

    public function clientes(){

//          return $this->belongsTo('Clientetipo','cliente_tipo_id');
//          return $this->hasMany('Cliente','id');
    }
    public static function validate($data)
    {
        if (Request::getMethod() == 'PUT') {
            $id = Request::segment(3);
// self::$rules['path_img'] .= ",$id";
            self::$rules['nm_razao_social'] .= ",$id";
//            if (!isset($data['path_img'])) {
//                self::$rules['path_img'] = "";
//            }
        }
// dd(self::$rules);
        return Validator::make($data, self::$rules);
    }


}