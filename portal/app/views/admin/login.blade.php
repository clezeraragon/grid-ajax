<!DOCTYPE html>
<html>

<head>
    <title>Login | Isonhei Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/login.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/animate-custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/login.css') }}" />
    <!-- end of page level css -->

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <!-- Notifications -->
            @include('notifications')
                
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="{{ route('signin') }}" autocomplete="on" method="post" role="form">
                                <h3 class="black_bg">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Isonhei">
                                    <br>Autenticação</h3>
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    
                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label style="margin-bottom:0px;" for="email" class="uname control-label"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email" name="email" required type="email" placeholder="E-mail" />
                                    <div class="col-sm-12">
                                        {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Senha
                                    </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                    <div class="col-sm-12">
                                        {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                                    </div>
                                </div>
                                <p class="keeplogin">
                                    <input type="checkbox" name="remember-me" id="remember-me" value="remember-me" />
                                    <label for="remember-me">Mantenha-me conectado</label>
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Entrar" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Esqueceu a senha?</button>
                                    </a>
                                    <a href="#toregister">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-success btn-sm" style="float:right;">Cadastra-se</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="{{ route('signup') }}" autocomplete="on" method="post" role="form">
                                <h3 class="black_bg">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Isonhei">
                                    <br>Cadastro</h3>
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                
                                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="first_name" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Nome
                                        </label>
                                        <input id="first_name" name="first_name" required type="text" placeholder="John" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="last_name" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Sobre Nome
                                        </label>
                                        <input id="last_name" name="last_name" required type="text" placeholder="Doe" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="email" class="youmail">
                                            <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            E-mail
                                        </label>
                                        <input id="email" name="email" required type="email" placeholder="seu@email.com" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group {{ $errors->first('email_confirm', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="email" class="youmail">
                                            <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Confirm E-mail
                                        </label>
                                        <input id="email_confirm" name="email_confirm" required type="email" placeholder="mysupermail@mail.com" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Senha
                                        </label>
                                        <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="passwor_confirm" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Confirmar Senha
                                        </label>
                                        <input id="password_confirm" name="password_confirm" required type="password" placeholder="eg. X8df!90EO" />
                                        <div class="col-sm-12">
                                            {{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('dt_nascimento', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="dt_nascimento" class="youmail">
                                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Data de Nascimento
                                        </label>
                                        <input id="dt_nascimento" name="dt_nascimento" required type="text" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                                        <div class="col-sm-12">
                                            {{ $errors->first('dt_nascimento', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('genero', 'has-error') }}">
                                        <label style="margin-bottom:0px;" for="genero" class="youmail">
                                            Gênero
                                        </label>
                                        <div>
                                            <label class="radio-inline">
                                                <input type="radio" name="genero" id="genero" value="F" required style="margin-left:-20px;">Feminino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="genero" id="genero" value="M" required style="margin-left:-25px;">Masculino
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $errors->first('genero', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="Cadastrar" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Voltar</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="{{ route('forgot-password') }}" autocomplete="on" method="post" role="form">
                                <h3 class="black_bg">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="josh logo">Esqueceu sua senha?</h3>
                                <p>
                                    Digite seu email abaixo e nós lhe enviaremos um link para redefinição de sua senha.
                                </p>

                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Email de cadastro
                                    </label>
                                    <input id="email" name="email" required type="email" placeholder="seu@email.com" />
                                    <div class="col-sm-12">
                                        {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                                    </div>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Redefinir Senha" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Voltar</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/vendors/livicons/minified/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/livicons/minified/livicons-1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom.js') }}"></script>
    <!-- end of global js -->

    <!-- begining of page level js -->
    <!-- InputMask -->
    <script src="{{ asset('assets/js/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>


</body>
</html>