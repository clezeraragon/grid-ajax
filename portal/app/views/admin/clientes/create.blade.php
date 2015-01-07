

{{-- Page title --}}
@section('title')
    {{$data['title']}}

    @parent
@stop
{{--{{$error}}--}}
{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    {{--@if(isset($errors))--}}
    {{--@foreach($errors->all() as $erro  )--}}
    {{--<p class="erros"> {{$erro}}</p>--}}
    {{--@endforeach--}}
    {{--@endif--}}
    <section class="content-header">
        <!--section starts-->
        <h1>Listagem de Clientes</h1>
        <ol class="breadcrumb">
            <li>
                <a href="../index"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li class="active">Clientes</li>
        </ol>
    </section>
    <section class="content">

        {{-- inserção do botão novo --}}
        <div class="row">
            <div class="col-md-12">
                <a href="{{ URL::to($data['route']) }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
                <hr>

                <!-- BEGIN SAMPLE TABLE PORTLET-->

                <div class="portlet box info">

                    <div class="portlet-title">

                        <div class="caption">
                            <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Clientes
                        </div>
                    </div>


                    {{-- fim do botão --}}

                    {{-- sistema de busca pesquisar--}}

                    <div class="portlet-body">


                        {{-- Grid Interno --}}
                        <div class="table-responsive">
                            {{ Form::open()}}
                            {{Form::hidden('id',isset($cliente->id)? $cliente->id : '')}}
                            <div class="row">
                                <div class="col-md-3" style="">
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Razão Social','* Razão Social')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-circle"></i>
                                            </div>
                                            {{Form::text('nm_razao_social', isset($cliente->nm_razao_social) ? $cliente->nm_razao_social : Input::old('nm_razao_social'),array('class' => 'form-control'))}}

                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_razao_social', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('E-mail Responsável','* E-mail Responsável')}}
                                        <div class="input-group input-group">
                                            <span class="input-group-addon">@</span>
                                            {{Form::text('nm_email_responsavel', isset($cliente->nm_email_responsavel) ? $cliente->nm_email_responsavel : Input::old('nm_email_responsavel'),array('class' => 'form-control', 'id' => 'email'))}}

                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_email_responsavel', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Endereço')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">

                                                <i class="fa fa-road"></i>
                                            </div>
                                            {{Form::text('nm_endereco', isset($cliente->nm_endereco) ? $cliente->nm_endereco : Input::old('nm_endereco'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Cidade')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            {{Form::text('nm_cidade', isset($cliente->nm_cidade) ? $cliente->nm_cidade : Input::old('nm_cidade'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Estado')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            {{Form::text('nm_uf', isset($cliente->nm_uf) ? $cliente->nm_uf : Input::old('nm_uf'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>

                                </div>
                                <div class="col-md-3" style="">
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('CNPJ','* CNPJ')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-thumb-tack"></i>
                                            </div>
                                            {{Form::text('nm_cnpj', isset($cliente->nm_cnpj) ? $cliente->nm_cnpj : Input::old('nm_cnpj'),array('class' => 'form-control', 'id' => 'cnpj'))}}

                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_cnpj', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Telefone')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">

                                                <i class="fa fa-phone"></i>
                                            </div>
                                            {{Form::text('nm_telefone1', isset($cliente->nm_telefone1) ? $cliente->nm_telefone1 : Input::old('nm_telefone1'),array('class' => 'form-control', 'id' => 'phone-codes'))}}

                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_telefone1', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Numero')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            {{Form::text('nu_numero', isset($cliente->nu_numero) ? $cliente->nu_numero : Input::old('nu_numero'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>

                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Resumo')}}
                                        {{Form::textarea('txt_resumo', isset($cliente->txt_resumo) ? $cliente->txt_resumo : Input::old('txt_resumo'),array('class' => 'form-control'))}}
                                        <p class="help-block">Breve Resumo do Cliente.</p>
                                    </div>
                                </div>
                                <div class="col-md-3" style="">
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Responsável')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            {{Form::text('nm_responsavel', isset($cliente->nm_responsavel) ? $cliente->nm_responsavel : Input::old('nm_responsavel'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_responsavel', '<span class="text-danger">:message</span>') }}</p>
                                    </div>

                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Telefone')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">

                                                <i class="fa fa-phone"></i>
                                            </div>
                                            {{Form::text('nm_telefone2', isset($cliente->nm_telefone2) ? $cliente->nm_telefone2 : Input::old('nm_telefone2'),array('class' => 'form-control', 'id' => 'phone-codes2'))}}

                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_telefone2', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Complemento')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            {{Form::text('nm_complemento', isset($cliente->nm_complemento) ? $cliente->nm_complemento : Input::old('nm_complemento'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Descrição')}}
                                        {{Form::textarea('txt_descricao', isset($cliente->txt_descricao) ? $cliente->txt_descricao : Input::old('txt_descricao'),array('class' => 'form-control'))}}
                                        <p class="help-block">Breve Resumo do Cliente.</p>
                                    </div>
                                </div>
                                <div class="col-md-3" style="">
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Site')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-anchor"></i>
                                            </div>
                                            {{Form::text('nm_site', isset($cliente->nm_site) ? $cliente->nm_site : Input::old('nm_site'),array('class' => 'form-control'))}}
                                        </div>
                                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('CEP')}}
                                        <div class="input-group">
                                            {{--<span class=" input-group-addon glyphicon glyphicon-map-marker"></span>--}}
                                            <div class="input-group-addon">

                                                <i class=" glyphicon glyphicon-map-marker"></i>
                                            </div>
                                            {{Form::text('nm_cep', isset($cliente->nm_cep) ? $cliente->nm_cep : Input::old('nm_cep'),array('class' => 'form-control', 'id' => 'cep'))}}
                                        </div>
                                        <p class="help-block">{{ $errors->first('nm_cep', '<span class="text-danger">:message</span>') }}</p>
                                    </div>
                                    <div class="form-group" style="position: static;">
                                        {{Form::label('Bairro')}}
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            {{Form::text('nm_bairro', isset($cliente->nm_bairro) ? $cliente->nm_bairro : Input::old('nm_bairro'),array('class' => 'form-control'))}}
                                        </div>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div>
                                    {{Form::submit('Enviar',array('class' => 'btn btn-primary'))}}
                                    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                </div>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- InputMask -->
    <script src="{{ asset('assets/js/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
    {{--<script src="{{ asset('assets/js/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('assets/js/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/js/custom/custom.js') }}"></script>
@stop