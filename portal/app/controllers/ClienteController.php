<?php

use \Bllim\Datatables\Datatables;

class ClienteController extends BaseController
{

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

    public function __construct(Cliente $model)
    {
        $this->model = $model;
        $this->per_page = 10;
        $this->data = array(
            'title' => "Cliente",
            'titles' => "Clientes",
            'route' => 'admin/cliente',
            'view_dir' => 'admin.clientes'
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = $this->model->all();
        $this->layout->content = View::make($this->data['view_dir'] . '.index')
            ->with(array(
                'data' => $this->data,
                'clientes' => $clientes
            ));
    }
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
        $input = $this->model->setDefaultStatus($input);
        if(isset($input['path_img'])) {
            $this->model->setImg($input['path_img']);
            $input['path_img'] = $this->model->getImgPath();
        }
        $input = $this->model->setnull($input);
        $validator = $this->model->validate($input);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error', Lang::get('crud.create.error'));
        } else {
            $this->model->create($input);
            if(isset($input['path_img'])) {
                $this->model->upload_img($input['path_img']);
            }
            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.create.success'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function Show($id)
    {
        $cliente = $this->model->find($id);
        if (!$cliente) {
            return Redirect::to($this->data['route']);
        }
        $this->layout->content = View::make($this->data['view_dir'] . '.modal', compact('cliente'))->with(array('data' => $this->data));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        try {
            $rs = $this->model->findOrFail($id);
            $this->layout->content = View::make($this->data['view_dir'] . '.edit', compact('rs'))->with(array('data' => $this->data));
        }
        catch(ModelNotFoundException $e) {
            return Redirect::to($this->data['route'])
                ->with('error', Lang::get('crud.edit.error'));
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update($id)
    {
        $input = Input::all();
//        if(isset($input['path_img'])) {
//            $this->model->setImg($input['path_img']);
//            $input['path_img'] = $this->model->getImgPath();
//        }
//        else{
//            unset($input['path_img']);
//        }
//        $input = $this->model->setnull($input);
        $validator = $this->model->validate($input);
        if($validator->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error', Lang::get('crud.update.error'));
        } else {
            $this->model->find($id)->update($input);
            if(isset($input['path_img'])) {
                $this->model->upload_img($input['path_img']); //move o arquivo
            }
            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.update.success'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = $this->model->find($id);
        if (!$cliente) {
            return Redirect::to($this->data['route'])->with('error', Lang::get('crud.destroy.error'));
        }
        $cliente->delete();
        return Redirect::to($this->data['route'])->with('success', Lang::get('crud.destroy.success'));
    }
    public function articlesajax()
    {

//        $tasks = $this->model->all();
        $clientes = $this->model->select(array('id','nm_razao_social'));
//        dd($tasks);

        return Datatables::of($clientes)
            ->set_index_column('id')
            ->add_column('editar', '<a href="/admin/cliente/{{$id}}/edit/" ><i class="btn btn-warning btn-sm">Edit</i></a>',3)

//            ->setUrl(URL::route('/admin/cliente/', array('edit/' => '{{$id}}'))
//                '<a href="{{ URL::route(\'dash.posts.edit\', array(\'post_id\' => $id)) }}"

            ->add_column('delete', '<form action="/admin/cliente/{{$id}}" method="delete">
  <button type="submit">Click Me!</button>
  </form>')
//            ->add_column('delete', '<a href="{{ URL::route(\'/admin/cliente/\', array(\'cliente\' => $id)) }}"><i class="btn btn-danger btn-sm">Delete</i></a>')
            ->make(true);

//        ->add_column('editar', '<a href="{{URL::route('/admin/cliente/edit/',array('/id/' => $id))}}" ><i class="btn btn-danger btn-sm">Edit</i></a>',3)




    }
}