@extends('emails.layouts.default')

@section('content')

    <h1>Prezado(a) {{$user->first_name}},</h1>

    <p>
        Seu e-mail deve ser confirmado antes de ser utilizado para acessar nosso portal.
    </p>
    <p>
        Para confirmar o e-mail e ter acesso instantâneo, utilize <a href="{{$activationUrl}}">este link de confirmação</a>. Este link pode ser utilizado somente uma vez.
    </p>
    <p style="border:1px solid #E0E0E0; font-size:12px; line-height:16px; margin:0 0 16px 0; padding:13px 18px; background:#f9f9f9;">
        Use os seguintes dados quando fazer o login:<br/>
        <strong>E-mail:</strong> {{$user->email}}<br/>
    </p>
    <p>
        Se você tiver alguma dúvida sobre a sua conta ou qualquer outra coisa, entre em contato conosco através do e-mail
        <a href="mailto: @lang('general.empresa_email_geral')">
            @lang('general.empresa_email_geral')
        </a>.
    </p>
@stop