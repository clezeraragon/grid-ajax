<?php

namespace Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use View, Redirect, Input, Exception, Lang; // Padrao
use Sentry, ConteudoComentario; //Por CRUD

class ConteudoComentarioController extends BaseController {

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

    public function __construct(ConteudoComentario $model)
    {
        $this->model = $model;
        $this->per_page = 10;
        $this->data = array(
            'title' => "Comentário",
            'titles' => "Comentários",
            'route' => 'admin/conteudo-comentario',
            'view_dir' => 'admin.conteudo-comentario'
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $comentario = null; // @var url com filtro

        //campos que podem ser ordenados
        $fields = array('usuario', 'conteudo', 'comentario', 'st_aprovado', 'updated_at');
        $sort = in_array(Input::get('sort'), $fields) ? Input::get('sort') : 'conteudo_comentario.created_at';
        $order = Input::get('order') === 'desc' ? 'desc' : 'asc';

        $comentarios = $this->model->orderBy($sort, $order)->join('users' , 'conteudo_comentario.user_id', '=' , 'users.id')
            ->join('conteudo' , 'conteudo_comentario.conteudo_id' , '=' , 'conteudo.id');

        //filtro
        if(Input::has('comentario')) {
            $comentarios = $comentarios->where('comentario', 'LIKE', "%". Input::get('comentario') ."%");
            $comentario = '&comentario='. Input::get('comentario');
        }

        $comentarios = $comentarios->paginate($this->per_page, array('conteudo_comentario.id', 'users.first_name', 'conteudo.titulo', 'conteudo_comentario.comentario', 'conteudo_comentario.st_aprovado',
                                                                        'conteudo_comentario.updated_at'));

        $pagination = $comentarios->appends(array(
            'comentario' => Input::get('comentario'),
            'sort' => Input::get('sort'),
            'order' => Input::get('order')
        ))->links();

        $this->layout->content = View::make($this->data['view_dir'] . '.index')
            ->with(array(
                'data' => $this->data,
                'comentario' => Input::get('comentario'),
                'comentarios' => $comentarios,
                'pagination' => $pagination,
                'str' => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $comentario
            ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
            $comentario = $this->model->findOrFail($id);

            $this->layout->content = View::make($this->data['view_dir'] . '.edit', compact('comentario'))->with(array('data' => $this->data));
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

}
