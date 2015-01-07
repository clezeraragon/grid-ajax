
{{-- Page title --}}
@section('title')
{{$data['title']}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<!-- end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>Listagem de {{$data['titles']}}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                Home
            </a>
        </li>
        <li class="active">{{$data['titles']}}</li>
    </ol>
</section>
<!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box info">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        {{$data['titles']}}
                    </div>
                </div>



                <div class="portlet-body">

                    {{ Form::open(array('url' => $data['route'], 'method' => 'get', 'class' => 'form-horizontal')) }}
                        <div class="form-group">

                            <div class="col-md-4">

                                {{ Form::text('nome', $nome, array('placeholder' => 'Nome', 'class' => 'form-control input-md')) }}
                            </div>
                            <div class="col-md-4">
                                {{ Form::button('<span class="glyphicon glyphicon-search"></span> Pesquisar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
                            </div>
                        </div>

                    {{ Form::close() }}
                    <div class="table-responsive">
                        @if($usuarios->getItems())
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=first_name' . $str) }}">Nome</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=last_name' . $str) }}">Sobre Nome</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=email' . $str) }}">Email</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=dt_nascimento' . $str) }}">Data de Nascimento</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=perfil' . $str) }}">Perfil</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=last_login' . $str) }}">Último Acesso</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=activated' . $str) }}">Ativado</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=utm_campaign' . $str) }}">UTM Campaign</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=utm_source' . $str) }}">UTM Source</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=utm_medium' . $str) }}">UTM Medium</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=utm_term' . $str) }}">UTM Term</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=utm_content' . $str) }}">UTM Content</a></th>
                                        <th colspan="2">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ($usuario->first_name) }}</td>
                                            <td>{{ ($usuario->last_name) }}</td>
                                            <td>{{ ($usuario->email) }}</td>
                                            <td>{{ Util::toView($usuario->dt_nascimento) }}</td>
                                            <td>{{ ($usuario->perfil) }}</td>
                                            <td>@if($usuario->last_login){{ Util::toTimestamps($usuario->last_login) }} @endif  </td>
                                            <td>{{ Util::formatBoolean($usuario->activated) }}</td>
                                            <td>{{ ($usuario->utm_campaign) }}</td>
                                            <td>{{ ($usuario->utm_source) }}</td>
                                            <td>{{ ($usuario->utm_medium) }}</td>
                                            <td>{{ ($usuario->utm_term) }}</td>
                                            <td>{{ ($usuario->utm_content) }}</td>
                                            <td class="action">{{ link_to($data['route'] . '/' . $usuario->id . '/edit', 'Editar', array('class' => 'btn btn-warning btn-sm', 'title' => 'Editar')) }}</td>
                                            <td class="action">
                                                {{ Form::open(array('url' => $data['route'] . '/' . $usuario->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o registro selecionado?')) }}
                                                    {{ Form::button('Apagar', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Apagar')) }}
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            Exibindo de {{ $usuarios->getFrom() }} até {{ $usuarios->getTo() }} de {{ $usuarios->getTotal() }} registros.

                             {{ $pagination }}
                        @else
                            <p class="text-danger"><strong>{{ Lang::get('crud.read.info') }}</strong></p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->

    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop