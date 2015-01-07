<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 28/10/2014
 * Time: 10:24
 */


class Clientetipo extends Eloquent{


//    protected $table = 'cliente_tipo';
//    protected  $guarded = array('id');

    public function clientes(){
        // hasOne : ele vai retornar o primeiro registro que encontrar
        // hasMany : ele vai retornar todos os registros

//        return $this->hasMany('Cliente','cliente_tipo_id');
    }


}
