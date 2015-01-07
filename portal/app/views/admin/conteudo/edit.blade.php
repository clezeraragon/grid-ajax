
{{-- Page title --}}
@section('title')
{{$data['title']}}
@parent
@stop

@section('content')
    <br>
	{{ Form::open(array('url' => $data['route'] . '/' . $conteudo->id, 'method' => 'put', 'class' => 'form-horizontal', 'files' => true)) }}
        <fieldset>

            <!-- Form Name -->
            <legend>
                <span class="glyphicon glyphicon-plus-sign"></span> Editar {{$data['title']}}

                <a href="{{ URL::to($data['route']) }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
            </legend>

              <!-- Text input-->
              <div class="form-group {{ $errors->first('titulo', 'has-error') }}">
                {{ Form::label('titulo', '* Título', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                   {{ Form::text('titulo', Input::old('titulo', $conteudo->titulo), array('placeholder' => 'Título do conteúdo', 'class' => 'form-control input-md', 'required', 'id' => 'titulo')) }}
                   {{ $errors->first('titulo', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Textarea -->
              <div class="form-group {{ $errors->first('introducao', 'has-error') }}">
                {{ Form::label('introducao', '* Introdução', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                    {{ Form::textarea('introducao', Input::old('introducao', $conteudo->introducao), array('placeholder' => 'Introdução do conteúdo', 'class' => 'form-control', 'required', 'size' => '30x4', 'maxlength' => '300')) }}
                    {{ $errors->first('introducao', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Textarea -->
              <div class="form-group {{ $errors->first('conteudo', 'has-error') }}">
                {{ Form::label('conteudo', '* Conteúdo', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                    {{ Form::textarea('conteudo', Input::old('conteudo', $conteudo->conteudo), array('placeholder' => 'Conteúdo', 'class' => 'form-control', 'size' => '30x4', 'id' => 'ckeditor_full')) }}
                    {{ $errors->first('conteudo', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

              <!-- File Button -->
              <div class="form-group {{ $errors->first('path_img', 'has-error') }}">
                  <label class="col-md-4 control-label" for="filebutton">* Imagem</label>
                  <div class="col-md-4">
                      <img src="{{ asset('assets/imagens/' . $conteudo->path_img) }}" width="200">
                      <br><br>
                      {{ Form::file('path_img', Input::old('path_img'), array('class' => 'form-control input-md input-file"', 'required', 'id' => 'path_img')) }}
                      {{ $errors->first('path_img', '<span class="text-danger">:message</span>') }}
                  </div>
              </div>

               <!-- Text input-->
              <div class="form-group {{ $errors->first('url', 'has-error') }}">
                {{ Form::label('url', '* URL', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                   {{ Form::text('url', Input::old('url', $conteudo->url), array('placeholder' => 'url-seguindo-o-padrao', 'class' => 'form-control input-md', 'required', 'id' => 'url', 'disabled' => 'disabled')) }}
                   {{ $errors->first('url', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Text input-->
              <div class="form-group {{ $errors->first('titulo_pag', 'has-error') }}">
                {{ Form::label('titulo_pag', '* Título da página', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                   {{ Form::text('titulo_pag', Input::old('titulo_pag', $conteudo->titulo_pag), array('placeholder' => 'Título da página', 'class' => 'form-control input-md', 'required')) }}
                   {{ $errors->first('titulo_pag', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Text input-->
              <div class="form-group {{ $errors->first('descricao_pag', 'has-error') }}">
                {{ Form::label('descricao_pag', '* Descrição da página', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                   {{ Form::text('descricao_pag', Input::old('descricao_pag', $conteudo->descricao_pag), array('placeholder' => 'Descrição da Página', 'class' => 'form-control input-md', 'required')) }}
                   {{ $errors->first('descricao_pag', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Text input-->
              <div class="form-group {{ $errors->first('palavras_pag', 'has-error') }}">
                {{ Form::label('palavras_pag', '* Palavras chave da página', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-4">
                   {{ Form::text('palavras_pag', Input::old('palavras_pag', $conteudo->palavras_pag), array('placeholder' => 'Palavras chave da Página', 'class' => 'form-control input-md', 'required')) }}
                   {{ $errors->first('palavras_pag', '<span class="text-danger">:message</span>') }}
                </div>
              </div>

               <!-- Select Basic -->
               <div class="form-group {{ $errors->first('categoria_id', 'has-error') }} ">
                 {{ Form::label('categoria_id', '* Categoria', array('class' => 'control-label col-md-4')) }}
                 <div class="col-md-4">
                   {{ Form::select('categoria_id', ConteudoCategoria::comboConteudo(), Input::old('categoria_id', $conteudo->categoria_id), array('class' => 'form-control')) }}
                   {{ $errors->first('categoria_id', '<span class="text-danger">:message</span>') }}
                 </div>
               </div>

               <!-- Select Basic -->
               <div class="form-group {{ $errors->first('status_id', 'has-error') }} ">
                 {{ Form::label('status_id', '* Status', array('class' => 'control-label col-md-4')) }}
                 <div class="col-md-4">
                   {{ Form::select('status_id', ConteudoStatus::options(), Input::old('status_id', $conteudo->status_id), array('class' => 'form-control')) }}
                   {{ $errors->first('status_id', '<span class="text-danger">:message</span>') }}
                 </div>
               </div>

               <!-- Multiple Radios (inline) -->
               <div class="form-group {{ $errors->first('st_comentario', 'has-error') }} ">
                 {{ Form::label('st_comentario', '* Permitir comentários?', array('class' => 'col-md-4 control-label')) }}
                 <div class="col-md-4">
                   <label class="radio-inline" for="radios-0">
                     {{ Form::radio('st_comentario', '1', (Input::old('st_comentario', $conteudo->st_comentario) == '1'), array()) }}
                     Sim
                   </label>
                   <label class="radio-inline" for="radios-1">
                     {{ Form::radio('st_comentario', '0', (Input::old('st_comentario', $conteudo->st_comentario) == '0'), array()) }}
                     Não
                   </label>
                   {{ $errors->first('st_comentario', '<span class="text-danger">:message</span>') }}
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

<script type="text/javascript" src="{{ asset('assets/vendors/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js') }}"></script>

<script type="text/javascript">
    $(function() {
        // CKEditor Standard
        $('textarea#ckeditor_standard').ckeditor({
            height: '150px',
            toolbar: [{
                    name: 'document',
                    items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
                }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic']
                }
            ]
        });

        // CKEditor Full
        $('textarea#ckeditor_full').ckeditor({
            height: '200px'
        });

        // The "instanceCreated" event is fired for every editor instance created.
        CKEDITOR.on('instanceCreated', function(event) {
            var editor = event.editor,
                element = editor.element;

            // Customize editors for headers and tag list.
            // These editors don't need features like smileys, templates, iframes etc.
            if (element.is('h1', 'h2', 'h3') || element.getAttribute('id') == 'taglist') {
                // Customize the editor configurations on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configurations before the editor initialization takes place.
                editor.on('configLoaded', function() {

                    // Remove unnecessary plugins to make the editor simpler.
                    editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                        'forms,iframe,image,newpage,removeformat,' +
                        'smiley,specialchar,stylescombo,templates';

                    // Rearrange the layout of the toolbar.
                    editor.config.toolbarGroups = [{
                        name: 'editing',
                        groups: ['basicstyles', 'links']
                    }, {
                        name: 'undo'
                    }, {
                        name: 'clipboard',
                        groups: ['selection', 'clipboard']
                    }, {
                        name: 'about'
                    }];
                });
            }
        });

    });
</script>

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