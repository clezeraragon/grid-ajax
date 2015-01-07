<?php

class ConteudoCategoria extends BaseModel
{
    protected $table = 'conteudo_categoria';

    protected $guarded = array('id');

    protected $fillable = array('status', 'categoria_pai_id', 'categoria', 'url', 'descricao', 'titulo_pag', 'descricao_pag','palavras_pag', 'tipo_categoria');

    public static $rules = array(
        'status' => 'required|alpha_num',
        'categoria_pai_id' => 'alpha_num',
        'categoria' => 'required|min:5|max:100|unique:conteudo_categoria,categoria',
        'url' => 'required|alpha_dash|min:5|max:150|unique:conteudo_categoria,url',
        'descricao' => '',
        'titulo_pag' => 'required|min:5|max:100|unique:conteudo_categoria,titulo_pag',
        'descricao_pag' => 'required|min:5|max:255',
        'palavras_pag' => 'required|min:5|max:255',
        'tipo_categoria' => 'required',
    );

    public static function validate($data)
    {
        //Quando for update, permite ter o mesmo nome de perfil, desde que seja o mesmo id
        if(Request::getMethod() == 'PUT') {
            $id = Request::segment(3);
            self::$rules['categoria'] .= ",$id";
            self::$rules['titulo_pag'] .= ",$id";

            self::$rules['url'] = ''; // RCO-005
        }

        return Validator::make($data, self::$rules);
    }

    public static function options($notid = null)
    {
        $result = static::orderBy('categoria')->where('tipo_categoria' , "=" , "Pai");
        if($notid){
            $result = $result->where('id' , '!=' , $notid);
        }
        $result = $result->lists('categoria', 'id');

        return array('' => 'Selecione uma opção') + $result;
    }

    public static function comboConteudo()
    {
        $result = static::orderBy('categoria')->where('tipo_categoria' , "=" , "Filha")->lists('categoria', 'id');

        return array('' => 'Selecione uma categoria') + $result;
    }
}