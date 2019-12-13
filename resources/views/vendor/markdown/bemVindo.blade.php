@component('mail::message')
# Olá, {{$user->name}}!
Seja bem vindo ao sitema {{ config('app.name') }}!

O administrador do sistema já recebeu um aviso de seu cadastro. <br>
Em breve você poderá receber novas informações por email.

@component('mail::button', ['url' => $url])
    Abrir {{ config('app.name') }}
@endcomponent

Obrigado!

{{ config('app.name') }}

[[Mensagem enviada pelo sistema. Não deve ser respondida!]]

@endcomponent
