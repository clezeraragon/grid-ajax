<?php

namespace Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use View, Redirect, Input, Exception, Lang; // Padrao
use Sentry, Conteudo; //Por CRUD

class ConteudoController extends BaseController {

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

    public function __construct(Conteudo $model)
    {
        $this->model = $model;
        $this->per_page = 10;
        $this->data = array(
            'title' => "Conteúdo",
            'titles' => "Conteúdos",
            'route' => 'admin/conteudo',
            'view_dir' => 'admin.conteudo'
        );
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $titulo = null; // @var url com filtro

        //campos que podem ser ordenados
        $fields = array('titulo', 'introducao', 'categoria_id', 'status_id', 'updated_at');
        $sort = in_array(Input::get('sort'), $fields) ? Input::get('sort') : 'conteudo.created_at';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';

        $conteudos = $this->model->orderBy($sort, $order)->join('conteudo_categoria as cc' , 'conteudo.categoria_id', '=' , 'cc.id')
                                                        ->join('conteudo_status as cs' , 'conteudo.status_id' , '=' , 'cs.id');

        //filtro
        if(Input::has('titulo')) {
            $conteudos = $conteudos->where('conteudo.titulo', 'LIKE', "%". Input::get('titulo') ."%");
            $titulo = '&titulo='. Input::get('titulo');
        }

        $conteudos = $conteudos->paginate($this->per_page, array('conteudo.id', 'conteudo.titulo', 'conteudo.introducao', 'conteudo.url', 'cc.categoria as categoria', 'cs.status as status',
                                                                    'conteudo.st_comentario', 'conteudo.updated_at'));

        $pagination = $conteudos->appends(array(
            'titulo' => Input::get('titulo'),
            'sort' => Input::get('sort'),
            'order' => Input::get('order')
        ))->links();

        $this->layout->content = View::make($this->data['view_dir'] . '.index')
            ->with(array(
                'data' => $this->data,
                'titulo' => Input::get('titulo'),
                'conteudos' => $conteudos,
                'pagination' => $pagination,
                'str' => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $titulo
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

        $img = $input['path_img'];

        $nm_arq = $img->getClientOriginalName();
        $input['path_img'] = "conteudo/" . $nm_arq;

        $validator = $this->model->validate($input);

        if($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error',  Lang::get('crud.create.error'));
        } else {

            $this->model->create($input);

            //move o arquivo
            $img->move(public_path() . "/assets/imagens/conteudo/" , $nm_arq);

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
            $conteudo = $this->model->findOrFail($id);

            $this->layout->content = View::make($this->data['view_dir'] . '.edit', compact('conteudo'))->with(array('data' => $this->data));
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

        $img = $input['path_img'];
        $nm_arq = $img->getClientOriginalName();
        if($img){
            $input['path_img'] = "conteudo/" . $nm_arq;
        }
        else{
            unset($input['path_img']);
        }

        $validator = $this->model->validate($input);

        if($validator->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error', Lang::get('crud.update.error'));
        } else {
            $this->model->find($id)->update($input);

            if($img){
                //move o arquivo
                $img->move(public_path() . "/assets/imagens/conteudo/" , $nm_arq);
            }

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

}
