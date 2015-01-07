<?php

class ConteudoComentario extends BaseModel
{
    protected $table = 'conteudo_comentario';

    protected $guarded = array('id');

    protected $fillable = array('user_id', 'conteudo_id', 'comentario', 'st_aprovado');

    public static $rules = array(
        //'user_id' => 'required|alpha_num',
        //'conteudo_id' => 'required|alpha_num',
        'comentario' => 'required|min:10',
        'st_aprovado' => 'required|alpha_num'
    );
}