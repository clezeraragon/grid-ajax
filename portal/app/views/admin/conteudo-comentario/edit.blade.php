
{{-- Page title --}}
@section('title')
{{$data['title']}}
@parent
@stop

@section('content')
    <br>
	{{ Form::open(array('url' => $data['route'] . '/' . $comentario->id, 'method' => 'put', 'class' => 'form-horizontal')) }}
        <fieldset>

            <!-- Form Name -->
            <legend>
                <span class="glyphicon glyphicon-plus-sign"></span> Editar {{$data['title']}}

                <a href="{{ URL::to($data['route']) }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
            </legend>

               <!-- Textarea -->
              <div class="form-group {{ $errors->first('comentario', 'has-error') }}">
                {{ Form::label('comentario', '* Comentário', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                    {{ Form::textarea('comentario', Input::old('comentario', $comentario->comentario), array('class' => 'form-control', 'required', 'size' => '30x5')) }}
                    {{ $errors->first('comentario', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Multiple Radios (inline) -->
               <div class="form-group {{ $errors->first('st_aprovado', 'has-error') }} ">
                 {{ Form::label('st_aprovado', '* Aprovado?', array('class' => 'col-md-4 control-label')) }}
                 <div class="col-md-4">
                   <label class="radio-inline" for="radios-0">
                     {{ Form::radio('st_aprovado', '1', (Input::old('st_aprovado', $comentario->st_aprovado) == '1'), array()) }}
                     Sim
                   </label>
                   <label class="radio-inline" for="radios-1">
                     {{ Form::radio('st_aprovado', '0', (Input::old('st_aprovado', $comentario->st_aprovado) == '0'), array()) }}
                     Não
                   </label>
                   {{ $errors->first('st_aprovado', '<span class="text-danger">:message</span>') }}
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
<script>

    /**
     * Formatar URL, quando os campos nome da categoria e url forem alterados
     */
    $("#titulo, #url").change(function(){

        var param = $(this).val();

        $.get( "{{ URL::route("format-url") }}/" + param , function(data){
            $( "#url" ).val( data );
        });
    });

</script>
@stop