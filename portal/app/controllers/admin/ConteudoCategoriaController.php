<?php

namespace Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use View, Redirect, Input, Exception, Lang, Util; // Padrao
use Sentry, ConteudoCategoria; //Por CRUD

class ConteudoCategoriaController extends BaseController {

    /**
     * Classe model Perfil
     * @var Perfil
     */
    protected $model;

    /**
     * Numero de itens por pagina
     * @var int
     */
    protected $per_page;

    /**
     * dados padrão das views
     * @var array
     */
    protected $data;

    public function __construct(ConteudoCategoria $model)
    {
        $this->model = $model;
        $this->per_page = 10;
        $this->data = array(
            'title' => "Categoria",
            'titles' => "Categorias",
            'route' => 'admin/conteudo-categoria',
            'view_dir' => 'admin.conteudo-categoria'
        );
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categoria = null; // @var url com filtro

        //campos que podem ser ordenados
        $fields = array('status', 'categoria', 'url', 'descricao', 'tipo_categoria');
        $sort = in_array(Input::get('sort'), $fields) ? Input::get('sort') : 'conteudo_categoria.created_at';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';

        $categorias = $this->model->orderBy($sort, $order)->leftJoin('conteudo_categoria as cc' , 'conteudo_categoria.categoria_pai_id', '=' , 'cc.id');

        //filtro
        if(Input::has('categoria')) {
            $categorias = $categorias->where('conteudo_categoria.categoria', 'LIKE', "%". Input::get('categoria') ."%");
            $categoria = '&categoria='. Input::get('categoria');
        }

        //'conteudo_status.status as status', 'conteudo_categoria.categoria', 'conteudo_categoria.url', 'conteudo_categoria.descricao', 'conteudo_categoria.tipo_categoria'
        $categorias = $categorias->paginate($this->per_page, array('conteudo_categoria.id', 'conteudo_categoria.status', 'conteudo_categoria.categoria', 'conteudo_categoria.url', 'conteudo_categoria.descricao',
                                                                    'conteudo_categoria.tipo_categoria', 'conteudo_categoria.updated_at', 'cc.categoria as categoria_pai'));

        $pagination = $categorias->appends(array(
            'categoria' => Input::get('categoria'),
            'sort' => Input::get('sort'),
            'order' => Input::get('order')
        ))->links();

        $this->layout->content = View::make($this->data['view_dir'] . '.index')
            ->with(array(
                'data' => $this->data,
                'categoria' => Input::get('categoria'),
                'categorias' => $categorias,
                'pagination' => $pagination,
                'str' => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $categoria
            ));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make($this->data['view_dir'] . '.create')->with(array('data' => $this->data));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();

        if(Input::get('categoria_pai')) {
            $input['categoria_pai_id'] = Input::get('categoria_pai');
        }
        if(Input::get('tipo_categoria') == "Pai") {
            unset($input['categoria_pai_id']);
        }

        $validator = $this->model->validate($input);

        if($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error',  Lang::get('crud.create.error'));
        } else {

            $this->model->create($input);

            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.create.success'));
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        try {
            $categoria = $this->model->findOrFail($id);

            $this->layout->content = View::make($this->data['view_dir'] . '.edit', compact('categoria'))->with(array('data' => $this->data));
        }
        catch(ModelNotFoundException $e) {
            return Redirect::to($this->data['route'])
            ->with('error', Lang::get('crud.edit.error'));
         }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $input = Input::all();

        if(Input::get('categoria_pai')) {
            $input['categoria_pai_id'] = Input::get('categoria_pai');
        }
        if(Input::get('tipo_categoria') == "Pai") {
            $input['categoria_pai_id'] = null;
        }

        $validator = $this->model->validate($input);

        if($validator->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error', Lang::get('crud.update.error'));
        } else {
            $this->model->find($id)->update($input);

            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.update.success'));
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        try {
            $this->model->find($id)->delete();
            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.destroy.success'));
        } catch (Exception $e) {

            return Redirect::to($this->data['route'])
                ->with('error', Lang::get('crud.destroy.error'));
        }
	}

    public function formatUrl($string = null)
    {
       return Util::formatUrl($string);
    }

}
