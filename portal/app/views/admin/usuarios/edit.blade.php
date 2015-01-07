
{{-- Page title --}}
@section('title')
{{$data['title']}}
@parent
@stop

@section('content')
    <br>
	{{ Form::open(array('url' => $data['route'] . '/' . $usuario->id, 'method' => 'put', 'class' => 'form-horizontal')) }}
           <fieldset>

               <!-- Form Name -->
               <legend>
                      <span class="glyphicon glyphicon-plus-sign"></span> Editar {{$data['title']}}

                      <a href="{{ URL::to($data['route']) }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
                </legend>

               <!-- Text input-->
               <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                 {{ Form::label('first_name', '* Nome', array('class' => 'col-md-4 control-label')) }}
                 <div class="col-md-4">
                    {{ Form::text('first_name', Input::old('first_name', $usuario->first_name), array('placeholder' => 'Nome','class' => 'form-control input-md', 'required')) }}
                    {{ $errors->first('first_name', '<span class="text-danger">:message</span>') }}
                 </div>
               </div>

               <!-- Text input-->
                <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                    {{ Form::label('last_name', '* Sobre Nome', array('class' => 'col-md-4 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::text('last_name', Input::old('last_name', $usuario->last_name), array('placeholder' => 'Sobre Nome','class' => 'form-control input-md', 'required')) }}
                        {{ $errors->first('last_name', '<span class="text-danger">:message</span>') }}
                    </div>
                </div>

               <!-- Text input-->
                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                    {{ Form::label('email', '* Email', array('class' => 'col-md-4 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::email('email', Input::old('last_name', $usuario->email), array('placeholder' => 'Email','class' => 'form-control input-md', 'required')) }}
                        {{ $errors->first('email', '<span class="text-danger">:message</span>') }}
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group {{ $errors->first('genero', 'has-error') }}">
                  {{ Form::label('perfil_id', '* Perfil', array('class' => 'control-label col-md-4')) }}
                  <div class="col-md-4">
                    {{ Form::select('perfil_id', Perfil::options(), Input::old('perfil_id', $usuario->perfil_id), array('class' => 'form-control', 'required')) }}
                    {{ $errors->first('perfil_id', '<span class="text-danger">:message</span>') }}
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group {{ $errors->first('dt_nascimento', 'has-error') }}">
                    {{ Form::label('dt_nascimento', '* Data de Nascimento', array('class' => 'col-md-4 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::text('dt_nascimento', Input::old('dt_nascimento', Util::toView($usuario->dt_nascimento)), array('data-inputmask' => "'alias': 'dd/mm/yyyy'", 'data-mask',
                                                                                        'placeholder' => 'dd/mm/yyyy','class' => 'form-control input-md', 'required')) }}
                        {{ $errors->first('dt_nascimento', '<span class="text-danger">:message</span>') }}
                    </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group" {{ $errors->first('genero', 'has-error') }}>
                  {{ Form::label('genero', '* Gênero', array('class' => 'col-md-4 control-label')) }}
                  <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                      <input type="radio" name="genero" id="genero-0" value="F" @if($usuario->genero == "F") checked="checked" @endif>
                      Feminino
                    </label>
                    <label class="radio-inline" for="radios-1">
                      <input type="radio" name="genero" id="genero-1" value="M" @if($usuario->genero == "M") checked="checked" @endif>
                      Masculino
                    </label>
                    {{ $errors->first('genero', '<span class="help-block">:message</span>') }}
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group" {{ $errors->first('password', 'has-error') }}>
                  {{ Form::label('password', 'Nova Senha', array('class' => 'col-md-4 control-label')) }}
                  <div class="col-md-4">
                    {{ Form::password('password', null, array('class' => 'form-control input-md')) }}
                    {{ $errors->first('password', '<span class="text-danger">:message</span>') }}
                    <span class="help-block">Preencha apenas se desejar trocar a senha</span>
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group" {{ $errors->first('password_confirm', 'has-error') }}>
                  {{ Form::label('password_confirm', 'Confirmar Nova Senha', array('class' => 'col-md-4 control-label')) }}
                  <div class="col-md-4">
                    {{ Form::password('password_confirm', null, array('class' => 'form-control input-md')) }}
                    {{ $errors->first('password_confirm', '<span class="text-danger">:message</span>') }}
                    <span class="help-block">Preencha apenas se desejar trocar a senha</span>
                  </div>
                </div>

               <!-- Button -->
               <div class="form-group">
                 <label class="col-md-4 control-label" for="cadastrar"></label>
                 <div class="col-md-4">
                   {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
                 </div>
               </div>

           </fieldset>
        {{ Form::close() }}
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<!-- InputMask -->
<script src="{{ asset('assets/js/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/custom/custom.js') }}"></script>
@stop