<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plano de Trabalho</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
            margin-top: 15vh;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .login{
            border-bottom-length: 50px;
            border-bottom-color: #efefef;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            font-size: 24px;
            margin: 0 0 10px;
            padding: 0 0 20px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .developers{
            width: 100%;
            align-items: center;

            margin-top: 20vh;
        }
        .footer{
            position: fixed;
            bottom: 0;

            width: 100%;
            text-align: center;
        }
    </style>
    @auth
        <script>window.location = "/home";</script>
    @endauth
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">

        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Plano de Trabalho
        </div>

        <div class="links login">
                <a href="{{ url('auth/google') }}">Entrar no sistema</a>
        </div>

        <div class="links developers">
            Deselvolvido por:<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8613402U0" target="_blank">Luis Sobotyk</a>
            <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4487652H3" target="_blank">Alcione Morais</a>
        </div>

    </div>

        <div class="footer"><div>Instituto Federal de Educação Ciência e Tecnologia do Rio Grande do Sul - Campus Rolante<div><div>2019 Software Livre - <a target="_blank" href="https://github.com/luismsobotyk/pt">Github</a></div></div>

</div>

</body>
</html>