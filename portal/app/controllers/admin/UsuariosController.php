<?php

namespace Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use View, Redirect, Input, Exception, Util, Lang; // Padrao
use Sentry, User; //Por CRUD

class UsuariosController extends BaseController {

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

    public function __construct(User $model)
    {
        $this->model = $model;
        $this->per_page = 10;
        $this->data = array(
            'title' => "Usuário",
            'titles' => "Usuários",
            'route' => 'admin/usuario',
            'view_dir' => 'admin.usuarios'
        );
    }

    public function index()
    {
        $nome = null;

        $fields = array('first_name', 'last_name', 'email', 'dt_nascimento', 'perfil', 'last_login', 'activated', 'utm_campaign', 'utm_source', 'utm_medium', 'utm_term', 'utm_content');
        $sort = in_array(Input::get('sort'), $fields) ? Input::get('sort') : 'id';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';

        $usuarios = $this->model->orderBy($sort, $order)->join('usuario_perfis', 'users.perfil_id', '=', 'usuario_perfis.id');

        if(Input::has('nome')) {
            $usuarios = $usuarios->where('first_name', 'LIKE', "%". Input::get('nome') ."%");
            $nome = '&nome='. Input::get('nome');
        }

        $usuarios = $usuarios->paginate(10, array('users.id', 'users.first_name', 'users.last_name', 'users.email', 'users.dt_nascimento','users.last_login', 'users.activated', 'users.utm_campaign',
                                                    'users.utm_source','users.utm_medium','users.utm_term','users.utm_content', 'usuario_perfis.perfil AS perfil'));

        $pagination = $usuarios->appends(array(
            'first_name' => Input::get('nome'),
            'sort' => Input::get('sort'),
            'order' => Input::get('order')
        ))->links();

        $this->layout->content = View::make($this->data['view_dir'] . '.index')
            ->with(array(
                'data' => $this->data,
                'nome' => Input::get('nome'),
                'usuarios' => $usuarios,
                'pagination' => $pagination,
                'str' => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $nome
            ));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {
        try {

            $usuario = $this->model->findOrFail($id);

            $this->layout->content = View::make($this->data['view_dir'] . '.edit', compact('usuario'))->with(array('data' => $this->data));
        } catch(ModelNotFoundException $e) {
            return Redirect::to($this->data['route'])
                ->with('error', Lang::get('crud.edit.error'));
        }
    }

    public function update($id)
    {
        $input = Input::all();

        $validator = $this->model->validateUser($input);

        $input['dt_nascimento'] = Util::toMySQL(Input::get('dt_nascimento'));

        if($validator->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('error', Lang::get('crud.update.error'));
        } else {
            if($input['password'] === '') {
                unset($input['password']);
            }
            unset($input['password_confirm']);

            $user = Sentry::getUserProvider()->findById($id);
            $user->update($input);

            return Redirect::to($this->data['route'])
                ->with('success', Lang::get('crud.update.success'));
        }
    }

    public function destroy($id)
    {
        try {
            $this->model->find($id)->delete();
            return Redirect::to($this->data['view_dir'])
                ->with('success', Lang::get('crud.destroy.success'));
        } catch (Exception $e) {

            return Redirect::to($this->data['view_dir'])
                ->with('error', Lang::get('crud.destroy.error'));
        }
    }

}