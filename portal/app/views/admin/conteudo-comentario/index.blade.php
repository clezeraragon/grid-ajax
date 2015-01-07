
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

                    {{ Form::open(array('url' => $data['route'] , 'method' => 'get', 'class' => 'form-horizontal')) }}
                        <div class="form-group">

                            <div class="col-md-4">

                                {{ Form::text('comentario', $comentario, array('placeholder' => 'Comentário', 'class' => 'form-control input-md')) }}
                            </div>
                            <div class="col-md-4">
                                {{ Form::button('<span class="glyphicon glyphicon-search"></span> Pesquisar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
                            </div>
                        </div>

                    {{ Form::close() }}
                    <div class="table-responsive">
                        @if($comentarios->getItems())
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=conteudo' . $str) }}">Conteúdo</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=comentario' . $str) }}">Comentário</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=usuario' . $str) }}">Usuário</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=st_aprovado' . $str) }}">Aprovado?</a></th>
                                        <th><a href="{{ URL::to($data['route'] . '?sort=updated_at' . $str) }}">Modificado</a></th>
                                        <th colspan="2">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comentarios as $comentario)
                                        <tr>
                                            <td>{{ ($comentario->titulo) }}</td>
                                            <td>{{ ($comentario->comentario) }}</td>
                                            <td>{{ ($comentario->first_name) }}</td>
                                            <td>{{ Util::formatBoolean($comentario->st_aprovado) }}</td>
                                            <td>{{ Util::toTimestamps($comentario->updated_at) }}</td>
                                            <td class="action">{{ link_to($data['route'] . '/' . $comentario->id . '/edit', 'Editar', array('class' => 'btn btn-warning btn-sm', 'title' => 'Editar')) }}</td>
                                            <td class="action">
                                                {{ Form::open(array('url' => $data['route'] . '/' . $comentario->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o registro selecionado?')) }}
                                                    {{ Form::button('Apagar', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Apagar')) }}
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            Exibindo de {{ $comentarios->getFrom() }} até {{ $comentarios->getTo() }} de {{ $comentarios->getTotal() }} registros.

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