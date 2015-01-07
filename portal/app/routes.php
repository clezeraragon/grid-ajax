<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Validação CSRF
Route::when('*', 'csrf', array('post'));

Route::get('/', array('as' => 'portal', 'uses' => 'HomeController@showPortal'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));
//Route::controller('cliente', 'ClienteController', array('except' => array('show')));
//Route::resource('cliente', 'ClienteController@showModal');



Route::group(array('prefix' => 'admin'), function () {
    Route::group(array('before' => 'auth|acl'), function () {
        Route::get('/', array('as' => 'dashboard', 'uses' => 'HomeController@showAdmin'));

        //Cliente
        Route::resource('cliente', 'ClienteController', array('except' => array('show')));
//        Route::controller('admin.clientes.create', 'ClienteController');
        Route::get('admin/articlesajax', array('as' => 'articlesajax', 'uses' => 'ClienteController@articlesajax'));

        /*Grupo ACL*/
            Route::resource('usuario', '\Admin\UsuariosController', array('except' => array('show')));
            Route::resource('perfil', '\Admin\PerfisController', array('except' => array('show')));

        /*Modulo Conteudo*/
            Route::resource('conteudo', '\Admin\ConteudoController', array('except' => array('show')));
            Route::resource('conteudo-categoria', '\Admin\ConteudoCategoriaController', array('except' => array('show')));
            Route::resource('conteudo-comentario', '\Admin\ConteudoComentarioController', array('except' => array('show', 'create', 'store')));

            Route::get('format-url/{string?}', array('as' => 'format-url', 'uses' => '\Admin\ConteudoCategoriaController@formatUrl'));

    });

    //All basic routes defined here
    Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
    Route::post('signin', 'AuthController@postSignin');
    Route::post('signup', array('as' => 'signup', 'uses' => 'AuthController@postSignup'));
    Route::post('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@postForgotPassword'));

    Route::get('login2', function () {
        return View::make('admin/login2');
    });

    //ACTIVE account
    Route::get('activate/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

    # Forgot Password Confirmation
    Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{passwordResetCode}', array('as' => 'post-forgot-password-confirm', 'uses' => 'AuthController@postForgotPasswordConfirm'));


    //Remaining pages will be called from below controller method
    //in real world scenario, you may be required to define all routes manually
    Route::get('{name?}', 'JoshController@showView');

}); 
