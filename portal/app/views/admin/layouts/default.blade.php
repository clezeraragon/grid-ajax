<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        | Isonhei Admin
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles/black.css') }}" rel="stylesheet" type="text/css" id="colorscheme" />
    <link rel="stylesheet" href="{{ asset('assets/css/panel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom/custom.css') }}" />

    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->


    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>

<body class="skin-josh">
    <header class="header">
        <a href="{{ URL::route('dashboard') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!--
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br>
                                        <small>45 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br>
                                        <small>An hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br>
                                        <small>3 Hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    -->

                    <!--
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">-->
                            <div class="riot">
                                <div>
                                    {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <!--
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}</p>
                            </li>
                            -->
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    Minha Conta
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::route('logout') }}">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i>
                                    Sair
                                </a>
                            </li>
                            <!--
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            -->
                            <!-- Menu Footer-->
                            <!--
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ URL::to('admin/lockscreen') }}">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ URL::to('admin/logout') }}">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>
                            -->
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar purplebg">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="{{ URL::route('portal') }}">
                                    <i class="livicon" data-name="home" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('admin/') }}">
                                    <i class="livicon" data-name="home" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('admin/') }}">
                                    <i class="livicon" data-name="home" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('admin/') }}">
                                    <i class="livicon" data-name="home" title="Form Builder 1" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li {{ (Request::is('admin/index') ? 'class="active"' : '') }}>
                            <a href="{{ URL::to('admin/index') }}">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>

                         @include('admin.layouts.custom_menu')
                        <!--
                        <li {{ (Request::is('admin/form_builder') || Request::is('admin/form_builder2') || Request::is('admin/buttonbuilder') || Request::is('admin/gridmanager') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
                                <span class="title">Builders</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/form_builder') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/form_builder') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/form_builder2') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/form_builder2') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder 2
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/buttonbuilder') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/buttonbuilder') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Button Builder
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/gridmanager') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/gridmanager') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Page Builder
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/form_controls') || Request::is('admin/editor') || Request::is('admin/form_layout') || Request::is('admin/validation') || Request::is('admin/formelements') || Request::is('admin/formwizard') || Request::is('admin/accordionformwizard') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#67C5DF" data-hc="#67C5DF" data-size="18" data-loop="true"></i>
                                <span class="title">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/form_controls') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/form_controls') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Controls
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/editor') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/editor') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Editors
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/form_layout') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/form_layout') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Layouts
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/validation') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/validation') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Validation
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/formelements') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/formelements') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Elements
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/formwizard') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/formwizard') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Wizards
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/accordionformwizard') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/accordionformwizard') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Accordion Wizards
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/animatedicons') || Request::is('admin/buttons') || Request::is('admin/advanced_buttons') || Request::is('admin/tabs_accordions') || Request::is('admin/panels') || Request::is('admin/icon') || Request::is('admin/color') || Request::is('admin/grid') || Request::is('admin/carousel') || Request::is('admin/advanced_modals') || Request::is('admin/tagsinput') || Request::is('admin/nestable') || Request::is('admin/toastr') || Request::is('admin/notifications') || Request::is('admin/session_timeout') || Request::is('admin/portlet_draggable') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">UI Features</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/animatedicons') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/animatedicons') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Icons
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/buttons') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/advanced_buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/advanced_buttons') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Buttons
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/tabs_accordions') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/tabs_accordions') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tabs and Accordions
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/panels') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/panels') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Panels
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/icon') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/icon') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Font Icons
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/color') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/color') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Color Picker Slider
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/grid') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/grid') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Grid Layout
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/carousel') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/carousel') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Carousel
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/advanced_modals') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/advanced_modals') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Modals
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/tagsinput') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/tagsinput') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tags Input
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/nestable') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/nestable') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Nestable List
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/toastr') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/toastr') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Toastr Notifications
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/notifications') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/notifications') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/session_timeout') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/session_timeout') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Session Timeout
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/portlet_draggable') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/portlet_draggable') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Draggable Portlets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/general') || Request::is('admin/pickers') || Request::is('admin/x-editable') || Request::is('admin/timeline') || Request::is('admin/transitions') || Request::is('admin/sliders') || Request::is('admin/knob') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">UI Components</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/general') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/general') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        General Components
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/pickers') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/pickers') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pickers
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/x-editable') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/x-editable') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        X-editable
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/timeline') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/timeline') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Timeline
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/transitions') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/transitions') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Transitions
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/sliders') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/sliders') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/knob') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/knob') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Circles Sliders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/simple_table') || Request::is('admin/responsive_tables') || Request::is('admin/advanced_tables') || Request::is('admin/editable_table') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">DataTables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/simple_table') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/simple_table') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Simple tables
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/responsive_tables') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/responsive_tables') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Responsive Datatables
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/advanced_tables') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/advanced_tables') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Data Tables
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/editable_table') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/editable_table') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Editable Datatables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/charts') || Request::is('admin/piecharts') || Request::is('admin/charts_animation') || Request::is('admin/jscharts') || Request::is('admin/sparklinecharts') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
                                <span class="title">Charts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/charts') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/charts') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Flot Charts
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/piecharts') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/piecharts') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pie Charts
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/charts_animation') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/charts_animation') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Charts
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/jscharts') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/jscharts') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        JS Charts
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/sparklinecharts') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/sparklinecharts') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sparkline Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/calendar') ? 'class="active"' : '') }}>
                            <a href="{{ URL::to('admin/calendar') }}">
                                <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
                                Calendar
                                <span class="badge badge-danger">7</span>
                            </a>
                        </li>
                        <li {{ (Request::is('admin/mail_box') || Request::is('admin/compose') || Request::is('admin/view_mail') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="mail" data-size="18" data-c="#67C5DF" data-hc="#67C5DF" data-loop="true"></i>
                                <span class="title">Email</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/mail_box') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/mail_box') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/compose') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/compose') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Compose
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/view_mail') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/view_mail') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Single Mail
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/tasks') ? 'class="active"' : '') }}>
                            <a href="{{ URL::to('admin/tasks') }}">
                                <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
                                Tasks
                                <span class="badge badge-danger">10</span>
                            </a>
                        </li>
                        <li {{ (Request::is('admin/gallery') || Request::is('admin/masonry_gallery') || Request::is('admin/dropzone') || Request::is('admin/imagecropping') || Request::is('admin/multiple_upload') || Request::is('admin/imgmagnifier') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/gallery') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/gallery') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/masonry_gallery') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/masonry_gallery') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Masonry Gallery
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/dropzone') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/dropzone') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Dropzone
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/imagecropping') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/imagecropping') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Cropping
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/multiple_upload') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/multiple_upload') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Multiple File Upload
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/imgmagnifier') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/imgmagnifier') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Magnifier
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/users') || Request::is('admin/adduser') || Request::is('admin/view_user') || Request::is('admin/deleted_users') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/users') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/users') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Users
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/adduser') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/adduser') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/view_user') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/view_user') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        View User
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/deleted_users') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/deleted_users') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Deleted Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/googlemaps') || Request::is('admin/vectormaps') || Request::is('admin/advancedmaps') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="map" data-c="#67C5DF" data-hc="#67C5DF" data-size="18" data-loop="true"></i>
                                <span class="title">Maps</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/googlemaps') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/googlemaps') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Google Maps
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/vectormaps') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/vectormaps') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Vector Maps
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/advancedmaps') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/advancedmaps') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/blog_list') || Request::is('admin/blog_details') || Request::is('admin/add_newblog') ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">Blog</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/blog_list') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/blog_list') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog List
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/blog_details') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/blog_details') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog Details
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/add_newblog') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/add_newblog') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/news') || Request::is('admin/news_item')  ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18" data-loop="true"></i>
                                <span class="title">News</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/news') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/news') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        News
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/news_item') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/news_item') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('admin/invoice') || Request::is('admin/blank')  ? 'class="active"' : '') }}>
                            <a href="#">
                                <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
                                <span class="title">Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/lockscreen') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/lockscreen') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Lockscreen
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/invoice') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/invoice') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/login') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/login') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/login2') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/login2') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login 2
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin/login#toregister') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Register
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/404') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/404') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        404 Error
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/500') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/500') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        500 Error
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/blank') ? 'class="active"' : '') }}>
                                    <a href="{{ URL::to('admin/blank') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blank Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        -->
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>
        <aside class="right-side">

            <!-- Notifications -->
            @include('notifications')

            <!-- Content -->
            @yield('content')

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    @if (Request::is('admin/form_builder2') || Request::is('admin/gridmanager') || Request::is('admin/portlet_draggable'))
        <script src="{{ asset('assets/vendors/form_builder1/js/jquery.ui.min.js') }}"></script>
    @endif
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/vendors/livicons/minified/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/livicons/minified/livicons-1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/josh.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/holder-master/holder.js') }}"></script>
    <!-- end of global js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>
</html>