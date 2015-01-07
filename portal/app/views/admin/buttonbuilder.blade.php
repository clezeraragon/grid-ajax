@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Button Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/buttonbuilder2.css') }}" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>Button Builder</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Home
            </a>
        </li>
        <li>
            <a href="#">Builders</a>
        </li>
        <li class="active">Button Builder</li>
    </ol>
</section>
<!--section ends-->
<section class="content">
    <!--main content-->
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable visible-xs visible-md">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                May not work properly in touch enabled devices as it as requires drag and drop.
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="vector-square" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Button Builder
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <!-- button Builder. -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Generated code</p>
                            <div class="well">
                                <div id="result">
                                    <div id="button">
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <span class="glyphicon glyphicon-check"></span>
                                            Default text here
                                        </a>
                                    </div>
                                    <br>
                                    <p>
                                        Generated Code
                                        <input id="output" type="text" class="form-control input-block-level" placeholder="Output"></p>
                                </div>
                            </div>
                            <p></p>
                            <div id="carbonads-container"></div>
                            <p></p>
                            <hr></div>
                        <div class="col-md-6">
                            <p class="lead">Button text :</p>
                            <p id="input">
                                <input id="name" autocomplete="off" class="form-control" type="text" placeholder="Please enter your button name"></p>
                            <p class="lead">Color :</p>
                            <div id="types" class="btn-group">
                                <button name="color" type="button" class="btn btn-default" value="btn-default">Default</button>
                                <button name="color" type="button" class="btn btn-primary" value="btn-primary">Primary</button>
                                <button name="color" type="button" class="btn btn-info" value="btn-info">Info</button>
                                <button name="color" type="button" class="btn btn-success" value="btn-success">Success</button>
                                <button name="color" type="button" class="btn btn-warning" value="btn-warning">Warning</button>
                                <button name="color" type="button" class="btn btn-danger" value="btn-danger">Danger</button>
                            </div>
                            <p class="lead">Size :</p>
                            <div id="sizes">
                                <p>
                                    <button class="btn btn-xs btn-primary" value="btn-xs" type="button">Mini</button>
                                    <button class="btn btn-sm btn-primary" value="btn-sm" type="button">Small</button>
                                    <button class="btn btn-md btn-primary" value="btn-md" type="button">Default</button>
                                    <button class="btn btn-primary btn-lg" value="btn-lg" type="button">Large</button>
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary btn-block" data-toggle="button">Full width button</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="icons">
                                <p class="lead">Icon :</p>
                                <div class="row">
                                    <div class="col-md-2">Search icons :</div>
                                    <div class="col-md-4">
                                        <input id="search" type="text" autocomplete="off" placeholder="Search icon" class="typeahead form-control"></div>
                                    <div class="col-md-6">
                                        Icon position :
                                        <div id="icon-position" class="btn-group">
                                            <button class="btn btn-default" value="left" type="button">
                                                <span class="glyphicon glyphicon-arrow-left"></span>
                                                &nbsp; &nbsp;Left
                                            </button>
                                            <button class="btn btn-default" value="right" type="button">
                                                Right &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="bs-glyphicons">
                                            <li>
                                                <a href="d#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-adjust"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-align-center"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-align-justify"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-align-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-align-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-arrow-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-asterisk"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-backward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-ban-circle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-barcode"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-bell"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-bold"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-book"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-bookmark"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-briefcase"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-bullhorn"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-camera"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-certificate"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-check"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-chevron-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-circle-arrow-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-cloud"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-cloud-download"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-cloud-upload"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-cog"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-collapse-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-collapse-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-compressed"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-copyright-mark"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-credit-card"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-cutlery"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-dashboard"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-download"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-download-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-earphone"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-eject"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-envelope"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-euro"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-expand"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-export"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-eye-close"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-facetime-video"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-fast-backward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-fast-forward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-file"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-film"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-filter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-fire"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-flag"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-flash"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-floppy-disk"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-floppy-open"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-floppy-remove"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-floppy-save"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-floppy-saved"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-folder-close"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-font"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-forward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-fullscreen"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-gbp"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-gift"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-glass"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-globe"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hand-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hand-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hand-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hand-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hd-video"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-hdd"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-header"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-headphones"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-heart"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-home"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-import"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-inbox"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-indent-left"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-indent-right"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-info-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-italic"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-leaf"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-link"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-list"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-list-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-lock"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-log-in"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-log-out"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-magnet"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-map-marker"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-minus-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-move"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-music"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-new-window"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-off"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-ok-circle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-open"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-paperclip"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-pause"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-phone"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-phone-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-picture"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plane"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-play"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-play-circle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-print"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-pushpin"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-qrcode"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-question-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-random"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-record"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-refresh"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-registration-mark"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-remove-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-repeat"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-resize-full"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-resize-horizontal"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-resize-small"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-resize-vertical"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-retweet"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-road"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-save"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-saved"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-screenshot"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sd-video"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-send"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-share"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-share-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-signal"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-attributes"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-order"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sound-5-1"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sound-6-1"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sound-7-1"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sound-dolby"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-sound-stereo"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-stats"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-step-backward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-step-forward"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-stop"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-subtitles"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tag"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tags"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tasks"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-text-height"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-text-width"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-th-large"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-th-list"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-thumbs-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tint"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tower"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-transfer"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tree-conifer"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-tree-deciduous"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-unchecked"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-upload"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-usd"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-user"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-volume-down"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-volume-off"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-volume-up"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-wrench"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-zoom-out"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--button builder ends--> </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
@stop

@section('footer_scripts')
<script src="{{ asset('assets/vendors/icons_files/scripts.min.js') }}"></script>
<script src="{{ asset('assets/vendors/icons_files/underscore-min.js') }}"></script>
<script src="{{ asset('assets/vendors/icons_files/backbone-min.js') }}"></script>
<script type="text/javascript">
    ! function(e) {
        "use strict";
        var t = function(t, n) {
            this.$element = e(t);
            this.options = e.extend({}, e.fn.typeahead.defaults, n);
            this.matcher = this.options.matcher || this.matcher;
            this.sorter = this.options.sorter || this.sorter;
            this.highlighter = this.options.highlighter || this.highlighter;
            this.updater = this.options.updater || this.updater;
            this.source = this.options.source;
            this.$menu = e(this.options.menu);
            this.shown = false;
            this.listen()
        };
        t.prototype = {
            constructor: t,
            select: function() {
                var e = this.$menu.find(".active").attr("data-value");
                this.$element.val(this.updater(e)).change();
                return this.hide()
            },
            updater: function(e) {
                return e
            },
            show: function() {
                var t = e.extend({}, this.$element.position(), {
                    height: this.$element[0].offsetHeight
                });
                this.$menu.insertAfter(this.$element).css({
                    top: t.top + t.height,
                    left: t.left
                }).show();
                this.shown = true;
                return this
            },
            hide: function() {
                this.$menu.hide();
                this.shown = false;
                return this
            },
            lookup: function(t) {
                var n;
                this.query = this.$element.val();
                if (!this.query || this.query.length < this.options.minLength) {
                    return this.shown ? this.hide() : this
                }
                n = e.isFunction(this.source) ? this.source(this.query, e.proxy(this.process, this)) : this.source;
                return n ? this.process(n) : this
            },
            process: function(t) {
                var n = this;
                t = e.grep(t, function(e) {
                    return n.matcher(e)
                });
                t = this.sorter(t);
                if (!t.length) {
                    return this.shown ? this.hide() : this
                }
                return this.render(t.slice(0, this.options.items)).show()
            },
            matcher: function(e) {
                return~ e.toLowerCase().indexOf(this.query.toLowerCase())
            },
            sorter: function(e) {
                var t = [],
                    n = [],
                    r = [],
                    i;
                while (i = e.shift()) {
                    if (!i.toLowerCase().indexOf(this.query.toLowerCase())) t.push(i);
                    else if (~i.indexOf(this.query)) n.push(i);
                    else r.push(i)
                }
                return t.concat(n, r)
            },
            highlighter: function(e) {
                var t = this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
                return e.replace(new RegExp("(" + t + ")", "ig"), function(e, t) {
                    return "<strong>" + t + "</strong>"
                })
            },
            render: function(t) {
                var n = this;
                t = e(t).map(function(t, r) {
                    t = e(n.options.item).attr("data-value", r);
                    t.find("a").html(n.highlighter(r));
                    return t[0]
                });
                t.first().addClass("active");
                this.$menu.html(t);
                return this
            },
            next: function(t) {
                var n = this.$menu.find(".active").removeClass("active"),
                    r = n.next();
                if (!r.length) {
                    r = e(this.$menu.find("li")[0])
                }
                r.addClass("active")
            },
            prev: function(e) {
                var t = this.$menu.find(".active").removeClass("active"),
                    n = t.prev();
                if (!n.length) {
                    n = this.$menu.find("li").last()
                }
                n.addClass("active")
            },
            listen: function() {
                this.$element.on("focus", e.proxy(this.focus, this)).on("blur", e.proxy(this.blur, this)).on("keypress", e.proxy(this.keypress, this)).on("keyup", e.proxy(this.keyup, this));
                if (this.eventSupported("keydown")) {
                    this.$element.on("keydown", e.proxy(this.keydown, this))
                }
                this.$menu.on("click", e.proxy(this.click, this)).on("mouseenter", "li", e.proxy(this.mouseenter, this)).on("mouseleave", "li", e.proxy(this.mouseleave, this))
            },
            eventSupported: function(e) {
                var t = e in this.$element;
                if (!t) {
                    this.$element.setAttribute(e, "return;");
                    t = typeof this.$element[e] === "function"
                }
                return t
            },
            move: function(e) {
                if (!this.shown) return;
                switch (e.keyCode) {
                    case 9:
                    case 13:
                    case 27:
                        e.preventDefault();
                        break;
                    case 38:
                        e.preventDefault();
                        this.prev();
                        break;
                    case 40:
                        e.preventDefault();
                        this.next();
                        break
                }
                e.stopPropagation()
            },
            keydown: function(t) {
                this.suppressKeyPressRepeat = ~e.inArray(t.keyCode, [40, 38, 9, 13, 27]);
                this.move(t)
            },
            keypress: function(e) {
                if (this.suppressKeyPressRepeat) return;
                this.move(e)
            },
            keyup: function(e) {
                switch (e.keyCode) {
                    case 40:
                    case 38:
                    case 16:
                    case 17:
                    case 18:
                        break;
                    case 9:
                    case 13:
                        if (!this.shown) return;
                        this.select();
                        break;
                    case 27:
                        if (!this.shown) return;
                        this.hide();
                        break;
                    default:
                        this.lookup()
                }
                e.stopPropagation();
                e.preventDefault()
            },
            focus: function(e) {
                this.focused = true
            },
            blur: function(e) {
                this.focused = false;
                if (!this.mousedover && this.shown) this.hide()
            },
            click: function(e) {
                e.stopPropagation();
                e.preventDefault();
                this.select();
                this.$element.focus()
            },
            mouseenter: function(t) {
                this.mousedover = true;
                this.$menu.find(".active").removeClass("active");
                e(t.currentTarget).addClass("active")
            },
            mouseleave: function(e) {
                this.mousedover = false;
                if (!this.focused && this.shown) this.hide()
            }
        };
        var n = e.fn.typeahead;
        e.fn.typeahead = function(n) {
            return this.each(function() {
                var r = e(this),
                    i = r.data("typeahead"),
                    s = typeof n == "object" && n;
                if (!i) r.data("typeahead", i = new t(this, s));
                if (typeof n == "string") i[n]()
            })
        };
        e.fn.typeahead.defaults = {
            source: [],
            items: 8,
            menu: '<ul class="typeahead dropdown-menu"></ul>',
            item: '<li><a href="#"></a></li>',
            minLength: 1
        };
        e.fn.typeahead.Constructor = t;
        e.fn.typeahead.noConflict = function() {
            e.fn.typeahead = n;
            return this
        };
        e(document).on("focus.typeahead.data-api", '[data-provide="typeahead"]', function(t) {
            var n = e(this);
            if (n.data("typeahead")) return;
            n.typeahead(n.data())
        })
    }(window.jQuery);
    Button = Backbone.Model.extend({
        defaults: {
            name: "Default text here",
            size: "",
            fullwidth: false,
            type: "btn-default",
            icon: "",
            iconplacement: ""
        },
        initialize: function() {}
    });
    ButtonView = Backbone.View.extend({
        el: $("#result"),
        initialize: function() {
            this.model.on("change", this.render, this);
            this.render()
        },
        events: {
            "click #output": "selectOutput"
        },
        selectOutput: function(e) {
            var t = $(e.currentTarget);
            t.select()
        },
        render: function() {
            var e = _.template("<a href=\"#\" class=\"btn<% fullwidth != false ? print(' btn-block') :'' %><% size !=''? print(' '+size) :'' %><% type !=''? print(' '+type) :'' %>\"><% if(iconplacement != 'right') { icon !=''? print('<span class=\"'+icon +'\"></span> ') : null } %><%= name %><% if(iconplacement == 'right') { icon !=''? print(' <span class=\"'+icon +'\"></span>') : null } %></a>");
            this.$el.find("#button").html(e(this.model.toJSON()));
            this.$el.find("input").val(e(this.model.toJSON()))
        }
    });
    SizesView = Backbone.View.extend({
        el: $("#sizes"),
        events: {
            "click button": "open",
            "click .btn-block": "toggle"
        },
        open: function(e) {
            e.preventDefault();
            this.model.set({
                size: e.currentTarget.value
            })
        },
        toggle: function(e) {
            e.preventDefault();
            this.model.set({
                fullwidth: !this.model.get("fullwidth")
            })
        }
    });
    TypesView = Backbone.View.extend({
        el: $("#types"),
        events: {
            "click button": "open"
        },
        open: function(e) {
            this.model.set({
                type: e.currentTarget.value
            })
        }
    });
    NameView = Backbone.View.extend({
        el: $("#input"),
        events: {
            "change input#name": "update"
        },
        update: function(e) {
            e.preventDefault();
            this.model.set({
                name: e.currentTarget.value
            })
        }
    });
    IconView = Backbone.View.extend({
        el: $("#icons"),
        events: {
            "click .bs-glyphicons a": "update",
            "click #icon-position button": "updatePosition",
            "click #icon-color button": "updateColor",
            "change input#search": "updateFromSearch"
        },
        updatePosition: function(e) {
            e.preventDefault();
            this.model.set({
                iconplacement: e.currentTarget.value
            })
        },
        update: function(e) {
            e.preventDefault();
            this.model.set({
                icon: $(e.currentTarget).find("span").attr("class")
            })
        },
        updateFromSearch: function(e) {
            e.preventDefault();
            this.model.set({
                icon: e.currentTarget.value
            })
        }
    });
    var button = new Button;
    var buttonView = new ButtonView({
        model: button
    });
    var sizesView = new SizesView({
        model: button
    });
    var typesView = new TypesView({
        model: button
    });
    var nameView = new NameView({
        model: button
    });
    var iconView = new IconView({
        model: button
    });
    var icons = [];
    $(".bs-glyphicons").children().each(function() {
        classstr = $(this).find("a").find("span").attr("class");
        icons.push(classstr)
    });
    $(".typeahead").typeahead({
        source: icons,
        items: 12
    })
    </script>
@stop