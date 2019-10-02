<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="utf-8" href={{ asset('materialize-css/css/materialize.min.css') }}>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src={{ asset('materialize-css/js/materialize.min.js') }}></script>

    <style type="text/css">
        body, html{
            background-color: #ecf0f1;
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
            margin-top: 60px;
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
        .dropdown-content {
            min-width: 600px;
            will-change: width;
        }
        .nav-wrapper{
            background-color: #111111;
        }
        .dropdown-content{
            background-color: #111111;
        }
        .dropdown-content li a{
            color: #e0e0e0;
        }
        .dropdown-content li a:hover{
            background-color: #424242;
        }
        .dropdown-content li a center{
            text-align: center !important;
        }
        table.highlight>tbody>tr:hover{
            background-color: #e0e0e0;
        }
    </style>

</head>
<body>

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

            {{-- @if(session('admin')) --}}

            <ul id="nav-mobile" class="brand-logo center hide-on-med-and-down">
                <li>
                    <a href="#">Listar Planos</a>
                </li>
                <li>
                    <a href="#">Listar Relatórios</a>
                </li>
                <li>
                    <a href="{{ route('listarUsuarios') }}">Ver Usuários</a>
                </li>
            </ul>

            {{-- @endif --}}

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>

            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <!-- Se tiver notificação não lida >
                li><a class="dropdown-trigger" data-target="notification" href="#notifications">Notificações<i class="material-icons left">notifications_active</i></a></li>

                <!-- Se não tiver notificações não lidas -->

                <li><a class="dropdown-trigger" data-target="notifications" href="#notifications">Notificações<i class="material-icons left">notifications</i></a></li>


                <ul id='notifications' class='dropdown-content'>
                    <li><a href="#!">Seu plano 2019/1 foi rejeitado por Fulano de Tal, revise-o.<span class="new badge right amber darken-3"></span></a></li>
                    <li><a href="#!">Seu plano 2018/2 foi aprovado.</a></li>
                    <li><a href="#!">Seu plano 2018/1 foi aprovado.</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="{{ route('notificacoes') }}" class="center">Ver Tudo<i class="material-icons left">notifications</i></a></li>
                </ul>
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
                    <a href="{{ route('meusPlanos') }}" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text espacamento-li-sidenav">Meus Planos</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="{{ route('preencherPlano') }}" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text espacamento-li-sidenav">Preencher Plano</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="{{ route('meusRelatorios') }}" class="grey-text">
                        <row><i class="medium material-icons grey-text">format_list_bulleted</i></row>
                        <p class="flow-text espacamento-li-sidenav">Meus Relatórios</p>
                    </a>
                </div>
            </li>
            <li>
                <div class="center">
                    <a href="{{ route('preencherRelatorio') }}" class="grey-text">
                        <row><i class="medium material-icons grey-text">assignment</i></row>
                        <p class="flow-text espacamento-li-sidenav">Preencher Relatório</p>
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
    <li style="text-align: center"><a href="{{ route('myProfile') }}"><img class="circle responsive-img" src="{{Auth::user()->profile_photo}}"
                                                                           style="width: 2rem; height: 2rem; vertical-align:middle; text-align:center;"> {{ Auth::user()->name }}</a>
    </li>
    <li><a href="{{ route('home') }}">Página Inicial</a></li>
    <div class="divider"></div>
    {{-- @if(session('admin')) --}}
    <li><a href="#">Listar Planos</a></li>
    <li><a href="#">Listar Relatórios</a></li>
    <li><a href="{{ route('listarUsuarios') }}">Ver Usuários</a></li>
    <div class="divider"></div>
    {{-- @endif --}}


    <li><a href="{{ route('meusPlanos') }}">Meus Planos</a></li>
    <li><a href="{{ route('preencherPlano') }}">Preencher Plano</a></li>
    <li><a href="{{ route('meusRelatorios') }}">Meus Relatórios</a></li>
    <li><a href="{{ route('preencherRelatorio') }}">Preencher Relatório</a></li>
    <div class="divider"></div>
    <li><a href="{{ route('logout') }}">Sair</a></li>
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

    $(window).ready(function(){
        if($('#slide-out').is(':hidden')){
            $('#content').css('padding-left', '0');
        }else{
            $('#content').css('padding-left', '300px');
        }
    });
    $('.dropdown-trigger').dropdown({
        constrainWidth: true,
        coverTrigger: false,
    });
</script>

</body>
</html>
