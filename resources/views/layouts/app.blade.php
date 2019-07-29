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
        .sidenav-custom {
            top: 64px;
            background-color: #394f67;
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
                <li><a href="{{ route('logout') }}"
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
    <ul id="slide-out" class="sidenav sidenav-fixed sidenav-custom">
        <a href="#"><i class="material-icons grey-text right">fast_rewind</i></a>
        <br/>
        <br/>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text" style="margin-top: -20px">Ver Planos</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text" style="margin-top: -20px">Preencher Plano</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text" style="margin-top: -20px">Ver Relatórios</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="#!" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text" style="margin-top: -20px">Preencher Relatórios</p>
                    </a>
                </div>
            </li>
    </ul>
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

<script>
    $(document).ready(function () {
        $('.sidenav').sidenav();
    }); // Inicia as funcoes de colapsar a navbar e sidebar em telas menores.
</script>

</body>
</html>
