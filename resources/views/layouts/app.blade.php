<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrf' => csrf_token(),
            'pusher' => [
                'key' => config('broadcasting.connections.pusher.key'),
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
            ],
            'user' => auth()->check() ? auth()->user()->id : '',
        ]) !!};
    </script>
    <style type="text/css">

        .notifications td a{
            color: #111111;
        }
        .notifications td:hover{
            background-color: #bdbdbd;
        }

        .font4-margin10 {
            font-size: 4em;
            margin-top: 10px;
        }

        body, html {
            background-color: #ecf0f1;
            width: 100%;
        }

        .sidenav-custom {
            top: 64px;
            background-color: #394f67;
            height: 100%;

        }

        .collapsed-button-sidenav {
            float: left;
            background: #394f67;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-top: 60px;
            position: absolute;
            display: none;
        }

        i.collapsed-button-sidenav-icon {
            margin-top: 3px;
            padding-right: 2px;
        }

        .vertical-align-center {
            margin: 0;
            margin-left: 13%;
            position: absolute;
            top: 50%;
            align-content: center;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .espacamento-li-sidenav {
            margin-top: -20px;
            padding-bottom: 20px;
        }

        .dropdown-content {
            min-width: 600px;
            will-change: width;
        }

        .nav-wrapper {
            background-color: #111111;
        }

        /*.dropdown-content #notifications{
            background-color: #111111;
        }
        .dropdown-content #notifications li a{
            color: #e0e0e0;
        }
        .dropdown-content #notifications li a:hover{
            background-color: #424242;
        }
        .dropdown-content #notifications li a center{
            text-align: center !important;
        }*/
        a.hover-black:hover {
            color: black !important;
        }

        table.highlight > tbody > tr:hover {
            background-color: #e0e0e0;
        }

        table.striped > tbody > tr:nth-child(odd) {
            background-color: #e0e0e0;
        }

        .padding-1-left {
            padding-left: 1rem;
        }

        .margin-2-top {
            margin-top: 2rem;
        }

        .margin-6-top {
            margin-top: 6rem;

    </style>

</head>
<body>
<div id="app">
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a title="Sair" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="material-icons">power_settings_new</i></a></li>
                    <li><a href="{{ route('myProfile') }}">{{ Auth::user()->name }}
                            <img class="circle responsive-img" src="{{Auth::user()->profile_photo}}"
                                 style="margin-left: 1rem; width: 2rem; height: 2rem; vertical-align:middle; text-align:center; margin-bottom: 2px;"></a>
                    </li>
                </ul>

                @if(Auth::user()->director)
                    <ul id="nav-mobile" class="brand-logo center hide-on-med-and-down">
                        <li>
                            <a href="{{ route('listarPeriodos') }}">Períodos</a>
                        </li>
                        <li>
                            <a href="{{ route('listarPlanos') }}">Listar Planos</a>
                        </li>
                        <li>
                            <a href="{{ route('listarRelatorios') }}">Listar Relatórios</a>
                        </li>
                        <li>
                            <a href="{{ route('listarUsuarios') }}">Ver Usuários</a>
                        </li>
                    </ul>
                @endif

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <notifications></notifications>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @include('layouts.sideNav')

    <div id="content" class="center"
         style="width: 100%; height: 300px; @if(Auth::user()->active && Auth::user()->email != env('USER_ROOT_MAIL')) padding-left: '300px'; @endif">
        @yield('content')
    </div>
</div>
@include('includes.alerts')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.sidenav').sidenav();

        // Inicia a funcao de colapsar a navbar e sidebar em telas menores.
        $('.sidenav-custom')
            .sidenav()
            .on('click tap', '#hide-sidenav', () => {
                //$('.sidenav').sidenav('close');
                $('.sidenav-custom').hide();
                $('#content').css('padding-left', '0');
                $('.collapsed-button-sidenav').show();
            });

        //
        $('.tooltipped').tooltip();

    });


    // Inicia a funcao que oculta a sidenav quando o usuario clica no botao de id #hide-sidenav e altera a posição e tamanho da div content
    $('#show-sidenav').on('click', function () {
        $('.sidenav-custom').show();
        $('#content').css('padding-left', '300px');
        $('.collapsed-button-sidenav').hide();
    });

    // Seta o padding do content quando a sidenav abre novamente
    $(window).resize(function () {
        if ($('#slide-out').is(':hidden')) {
            $('#content').css('padding-left', '0');
        } else {
            @if(Auth::user()->active && Auth::user()->email != env('USER_ROOT_MAIL')) $('#content').css('padding-left', '300px'); @endif
        }
    });

    $(window).ready(function () {
        if ($('#slide-out').is(':hidden')) {
            $('#content').css('padding-left', '0');
        } else {
            @if(Auth::user()->active && Auth::user()->email != env('USER_ROOT_MAIL')) $('#content').css('padding-left', '300px'); @endif
        }
    });
    $('.dropdown-trigger').dropdown({
        constrainWidth: true,
        coverTrigger: false,
    });
</script>

</body>
</html>
