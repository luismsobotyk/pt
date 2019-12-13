@component('mail::message')
# Olá, {{$director->name}}!

O seguinte usuário se cadastrou no sistema e possivelmente esta aguardando que você edite suas permissões de acesso:

Nome: {{$user->name}} <br>
Email: {{$user->email}}

@component('mail::button', ['url' => $url])
    Ver usuário
@endcomponent

Obrigado!

{{ config('app.name') }}

[[Mensagem enviada pelo sistema. Não deve ser respondida!]]

@endcomponent
