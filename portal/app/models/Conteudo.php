<?php

class Conteudo extends BaseModel
{
    protected $table = 'conteudo';

    protected $guarded = array('id');

    protected $fillable = array('categoria_id', 'status_id', 'titulo', 'introducao', 'conteudo', 'path_img', 'url', 'titulo_pag', 'descricao_pag','palavras_pag', 'st_comentario');

    public static $rules = array(
        'categoria_id' => 'required|alpha_num',
        'status_id' => 'required|alpha_num',
        'titulo' => 'required|min:5|max:255',
        'introducao' => 'required|min:10|max:300',
        'conteudo' => 'required|min:100',
        'path_img' => 'required|unique:conteudo,path_img',
        'url' => 'required|alpha_dash|min:5|max:150|unique:conteudo,url',
        'titulo_pag' => 'required|min:5|max:100|unique:conteudo,titulo_pag',
        'descricao_pag' => 'required|min:5|max:255',
        'palavras_pag' => 'required|min:5|max:255',
        'st_comentario' => 'required|alpha_num',
    );

    public static function validate($data)
    {
        //Quando for update, permite ter o mesmo nome de perfil, desde que seja o mesmo id
        if(Request::getMethod() == 'PUT') {
            $id = Request::segment(3);
            self::$rules['titulo_pag'] .= ",$id";

            self::$rules['url'] = "";
            self::$rules['path_img'] = "";
        }

        return Validator::make($data, self::$rules);
    }

}