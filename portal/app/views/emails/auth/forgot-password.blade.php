@extends('emails.layouts.default')

@section('content')

    <h1>Prezado(a) {{$user->first_name}},</h1>
    <p>
        Houve uma solicitação recente para alterar a senha de sua conta.
    </p>
    <p>
        Se você solicitou esta alteração de senha, clique no seguinte link para reconfigurar a sua senha:
    </p>
    <p>
        <a href="{{$forgotPasswordUrl}}">{{$forgotPasswordUrl}}</a>
    </p>
    <p>
        Se o link não funcionar, copie e cole a URL no seu navegador.
    </p>
    <p>
        Se você não fez essa solicitação, você pode ignorar esta mensagem e a sua senha permanecerá a mesma.
    </p>

@stop