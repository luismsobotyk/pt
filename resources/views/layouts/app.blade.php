<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="utf-8" href="materialize-css/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="materialize-css/js/materialize.min.js"></script>

    <style type="text/css">
        body, html{
            width: 100%;
        }
        .sidenav-custom {
            top: 64px;
            background-color: #394f67;
            height: 100%;

        }
        .collapsed-button-sidenav{
            float: left;
            background: #394f67;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-top: 10px;
            position:absolute;
            display: none;
        }
        i.collapsed-button-sidenav-icon{
            margin-top: 3px;
            padding-right: 2px;
        }
        .vertical-align-center{
            margin: 0;
            margin-left: 13%;
            position: absolute;
            top: 50%;
            align-content: center;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .espacamento-li-sidenav{
            margin-top: -20px;
            padding-bottom: 20px;
        }

    </style>

</head>
<body style="background-color: #ecf0f1;">

<!-- Navbar -->
<div class="wrapper">
    <nav>
        <div class="nav-wrapper" style="background-color: #111111;">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a title="Sair" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="material-icons">power_settings_new</i></a></li>
                <li>{{ Auth::user()->name }}</li>
                <li style="margin-left: 1rem;"><img class="circle responsive-img" src="{{Auth::user()->profile_photo}}"
                                                    style="width: 2rem; height: 2rem; vertical-align:middle; text-align:center;">
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#"><i class="material-icons">notifications</i></a></li>
                <li><a>Notificações</a></li>
            </ul>
        </div>
    </nav>
</div>


<!-- SideBar -->
<div>
    <ul id="slide-out" class="sidenav sidenav-fixed sidenav-custom hide-on-med-and-down">
        <a class="sidenav-close" href="#!" id="hide-sidenav"><i class="small material-icons grey-text right">fast_rewind</i></a>
        <br/>
        <br/>
            <div class="vertical-align-center">
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text espacamento-li-sidenav">Ver Planos</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text espacamento-li-sidenav">Preencher Plano</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text espacamento-li-sidenav">Ver Relatórios</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text espacamento-li-sidenav">Preencher Relatórios</p>
                    </a>
                </div>
            </li>
            </div>
    </ul>
    <div id='collapsed-button-sidenav-id' class="collapsed-button-sidenav hide-on-med-and-down">
        <a href="#" id="show-sidenav" data-target="slide-out" class="sidenav-trigger"><i class="material-icons grey-text collapsed-button-sidenav-icon">fast_forward</i></a>
    </div>
</div>

<!-- NavBar colapsada contendo as opções da NavBar e da SideBar-->
<ul class="sidenav" id="mobile-demo">
    <li style="text-align: center"><img class="circle responsive-img" src="{{Auth::user()->profile_photo}}"
                                        style="width: 2rem; height: 2rem; vertical-align:middle; text-align:center;"> {{ Auth::user()->name }}
    </li>
    <li><a href="#">Ver Planos</a></li>
    <li><a href="#">Preencher Plano</a></li>
    <li><a href="#">Ver Relatórios</a></li>
    <li><a href="#">Preencher Relatório</a></li>
    <li><a href="#">Sair</a></li>
</ul>


<div id="content" class="center" style="width: 100%; height: 300px;  padding-left:300px;">
    @yield('content')
</div>


<script>
    $(document).ready(function () {
        $('.sidenav').sidenav();
    }); // Inicia a funcao de colapsar a navbar e sidebar em telas menores.
    $(document).ready(function(){
        $('.sidenav-custom')
            .sidenav()
            .on('click tap', '#hide-sidenav', () => {
                //$('.sidenav').sidenav('close');
                $('.sidenav-custom').hide();
                $('#content').css('padding-left', '0');
                $('.collapsed-button-sidenav').show();
            });
    });// Inicia a funcao que oculta a sidenav quando o usuario clica no botao de id #hide-sidenav e altera a posição e tamanho da div content

    $('#show-sidenav').on('click', function(){
        $('.sidenav-custom').show();
        $('#content').css('padding-left', '300px');
        $('.collapsed-button-sidenav').hide();
    });// Seta o padding do content quando a sidenav abre novamente

    $(window).resize(function() {
        if($('#slide-out').is(':hidden')){
            $('#content').css('padding-left', '0');
        }else{
            $('#content').css('padding-left', '300px');
        }
    });

</script>

</body>
</html>
