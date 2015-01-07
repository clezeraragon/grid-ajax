

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
<!-- daterange picker -->
<link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/vendors/timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" />
<!--select css-->
<link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2-bootstrap.css') }}" />
<!--clock face css-->
<link href="{{ asset('assets/vendors/iCheck/skins/all.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/pages/alertmessage.css') }}" rel="stylesheet" />
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
 <div class="row">
        <div class="col-md-12">
            <a href="{{ URL::to($data['route']) }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
            <hr>

            <!-- BEGIN SAMPLE TABLE PORTLET-->

            <div class="portlet box info">


                </div>
                </div>
                </div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box info">
                <div class="portlet-title">
                    <div class="caption"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Detalhes do Grid {{$data['titles']}}
                    </div>
                </div>
                         <div class="portlet-body">
                           <div class="table-responsive">
                             <div class="row">
                               <div class="col-md-3" style="">
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('ID')}}</dt>
                                      <dd>{{isset($cliente->id) ? $cliente->id :""}}</dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Site')}}</dt>
                                      <dd>{{isset($cliente->nm_site) ? $cliente->nm_site :"N/D"}}</dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('E-mail Responsável')}}</dt>
                                      <dd>{{isset($cliente->nm_responsavel) ? $cliente->nm_responsavel :"N/D"}}</dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Telefone')}}</dt>
                                      <dd>{{isset($cliente->nm_telefone1) ? $cliente->nm_telefone1 :"N/D"}}</dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Telefone')}}</dt>
                                      <dd>{{isset($cliente->nm_telefone2) ? $cliente->nm_telefone2 :"N/D"}}</dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Cep')}}</dt>
                                      <dd>{{isset($cliente->nm_cep) ? $cliente->nm_cep :"N/D"}}</dd>
                                  </dl>
                              </div>
                          <div class="col-md-4" style="">
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('Bairro')}}</dt>
                                     <dd>{{isset($cliente->nm_bairro) ? $cliente->nm_bairro :"N/D"}}</dd>
                                 </dl>
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('Complemento')}}</dt>
                                     <dd>{{isset($cliente->nm_complemento) ? $cliente->nm_complemento :"N/D"}}</dd>
                                 </dl>
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('Responsável')}}</dt>
                                     <dd>{{isset($cliente->nm_responsavel) ? $cliente->nm_responsavel :"N/D"}}</dd>
                                 </dl>
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('Numero')}}</dt>
                                     <dd>{{isset($cliente->nu_numero) ? $cliente->nu_numero :"N/D"}}</dd>
                                 </dl>
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('CNPJ')}}</dt>
                                     <dd>{{isset($cliente->nm_cnpj) ? $cliente->nm_cnpj :"N/D"}}</dd>
                                 </dl>
                                 <dl class="dl-horizontal">
                                     <dt>{{Form::label('Estado')}}</dt>
                                     <dd>{{isset($cliente->nm_uf) ? $cliente->nm_uf :"N/D"}}</dd>
                                 </dl>
                             </div>
                             <div class="col-md-4" style="">
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Resumo')}}</dt>
                                      <dd><p>{{isset($cliente->txt_resumo) ? $cliente->txt_resumo :'N/D'}}</p></dd>
                                  </dl>
                                  <dl class="dl-horizontal">
                                      <dt>{{Form::label('Descrição')}}</dt>
                                      <dd> <p>{{isset($cliente->txt_descricao) ? $cliente->txt_descricao :"N/D"}} </p></dd>
                                  </dl>

                              </div>
                           </div>
                       </div>

            </div>
                           <!-- END SAMPLE TABLE PORTLET-->
          </div>
                      {{--<div class="col-md-6">--}}
                      {{--<div class="panel panel-info">--}}
                          {{--<div class="panel-heading">--}}
                              {{--<h3 class="panel-title">--}}
                                  {{--<i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>--}}
                                  {{--Notas--}}
                              {{--</h3>--}}
                              {{--<span class="pull-right clickable">--}}
                                  {{--<i class="glyphicon glyphicon-chevron-up"></i>--}}
                              {{--</span>--}}
                          {{--</div>--}}
                          {{--<div class="panel-body">--}}
                              {{--<div class="alert-message alert-message-success">--}}
                                  {{--<h4>{{Form::label('Resumo do Cliente')}}</h4>--}}
                                  {{--<p style="align-content: center">--}}
                                      {{--{{isset($cliente->txt_resumo) ? $cliente->txt_resumo :"Sem Informações"}}--}}


                                  {{--</p>--}}
                              {{--</div>--}}
                              {{--<div class="alert-message alert-message-default">--}}
                                  {{--<h4>{{Form::label('Descrição do Cliente')}}</h4>--}}
                                  {{--<p style="align-content: center">--}}
                                      {{--{{isset($cliente->txt_descricao) ? $cliente->txt_descricao :"Sem Informações"}}--}}


                                  {{--</p>--}}
                              {{--</div>--}}
                          {{--</div>--}}
                      {{--</div>--}}
                  {{--</div>--}}
                </div>
              </div>

</section>
@stop
@section('footer_scripts')
<!-- begining of page level js -->
<!-- InputMask -->
<script src="{{ asset('assets/js/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('assets/js/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('assets/js/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>



@stop

