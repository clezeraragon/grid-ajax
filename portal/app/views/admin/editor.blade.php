@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Blank Page
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" media="screen" href="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css') }}" />
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Editors</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Home
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">Editors</li>
    </ol>
</section>
<!--section ends-->
<section class="content paddingleft_right15">
    <!--main content-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title" style="color:#fff;"> <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    CKEditor Standard
                </div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <textarea id="ckeditor_standard"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title" style="color:#fff;">
                    <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    CKEditor Full
                </div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <textarea id="ckeditor_full"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title" style="color:#fff;">
                    <i class="livicon" data-name="thermo-up" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    TinyMCE Basic
                </div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <textarea id="tinymce_basic"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title" style="color:#fff;">
                    <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    TinyMCE Full
                </div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <textarea id="tinymce_full"></textarea>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 0 15px;">
        <div class='col-lg-12'>
            <!-- /.box -->
            <div class='box well well-sm'>
                <div class='box-header'>
                    <h3 class='box-title text-info'>
                        Bootstrap WYSIHTML5
                        <small>Simple editor</small>
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools"></div>
                    <!-- /. tools --> </div>
                <!-- /.box-header -->
                <div class='box-body pad'>
                    <form>
                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col--> </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Bootstrap WYSIHTML5
                    </h3>
                </div>
                <div class="panel-body">
                    <form>
                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default filterable">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Inline editing
                </h3>
            </div>
            <div class="panel-body">
                <div id="container">
                    <div id="header">
                        <div id="headerLeft">
                            <h2 id="sampleTitle" contenteditable="true">
                                CKEditor
                                <br>Goes Inline!</h2>
                            <h3 contenteditable="true">
                                Lorem ipsum dolor sit amet dolor duis blandit vestibulum faucibus a, tortor.
                            </h3>
                        </div>
                        <div id="headerRight">
                            <div contenteditable="true">
                                <p>
                                    Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.
                                </p>
                                <p>
                                    Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="columns">
                        <div id="column1">
                            <div contenteditable="true">
                                <h3>Fusce vitae porttitor</h3>
                                <p> <strong>Lorem ipsum dolor sit amet dolor. Duis blandit vestibulum faucibus a, tortor.</strong> 
                                </p>
                                <p>
                                    Proin nunc justo felis mollis tincidunt, risus risus pede, posuere cubilia Curae, Nullam euismod, enim. Etiam nibh ultricies dolor ac dignissim erat volutpat. Vivamus fermentum
                                    <a href="http://ckeditor.com/">nisl nulla sem in</a>
                                    metus. Maecenas wisi. Donec nec erat volutpat.
                                </p>
                                <blockquote>
                                    <p>
                                        Fusce vitae porttitor a, euismod convallis nisl, blandit risus tortor, pretium. Vehicula vitae, imperdiet vel, ornare enim vel sodales rutrum
                                    </p>
                                </blockquote>
                                <blockquote>
                                    <p>
                                        Libero nunc, rhoncus ante ipsum non ipsum. Nunc eleifend pede turpis id sollicitudin fringilla. Phasellus ultrices, velit ac arcu.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <div id="column2">
                            <div contenteditable="true">
                                <h3>Integer condimentum sit amet</h3>
                                <p> <strong>Aenean nonummy a, mattis varius. Cras aliquet.</strong>
                                    Praesent
                                    <a href="http://ckeditor.com/">magna non mattis ac, rhoncus nunc</a>
                                    , rhoncus eget, cursus pulvinar mollis.
                                </p>
                                <p>
                                    Proin id nibh. Sed eu libero posuere sed, lectus. Phasellus dui gravida gravida feugiat mattis ac, felis.
                                </p>
                                <p>
                                    Integer condimentum sit amet, tempor elit odio, a dolor non ante at sapien. Sed ac lectus. Nulla ligula quis eleifend mi, id leo velit pede cursus arcu id nulla ac lectus. Phasellus vestibulum. Nunc viverra enim quis diam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src="{{ asset('assets/vendors/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js') }}"></script>
<script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
    </script>
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
        // TinyMCE Basic
        tinymce.init({
            selector: "#tinymce_basic",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });

        // TinyMCE Full
        tinymce.init({
            selector: "#tinymce_full",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }]
        });
    });
    // Bootstrap
    $('#bootstrap-editor').wysihtml5({
        stylesheets: [
            'public/assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5wysiwyg-color.css'
        ]
    });
    </script>
@stop