<!-- SideBar -->
@if(Auth::user()->active && Auth::user()->email != env('USER_ROOT_MAIL'))
    <div>
        <ul id="slide-out" class="sidenav sidenav-fixed sidenav-custom hide-on-med-and-down">
            <a class="sidenav-close" href="#!" id="hide-sidenav"><i class="small material-icons grey-text right">fast_rewind</i></a>
            <br/>
            <br/>
            <div class="vertical-align-center">
                <li>
                    <div class="center">
                        <a href="{{ route('welcome') }}" class="grey-text">
                            <row><i class="medium material-icons grey-text">home</i></row>
                            <p class="flow-text espacamento-li-sidenav">Página Inicial</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="center">
                        <a href="{{ route('myProfile') }}" class="grey-text">
                            <row><i class="medium material-icons grey-text">account_circle</i></row>
                            <p class="flow-text espacamento-li-sidenav">Meu Perfil</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="center">
                        <a href="{{ route('meusPlanos') }}" class="grey-text">
                            <row><i class="medium material-icons grey-text">assignment</i></row>
                            <p class="flow-text espacamento-li-sidenav">Meus Planos</p>
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
            </div>
        </ul>
        <div id='collapsed-button-sidenav-id' class="collapsed-button-sidenav hide-on-med-and-down">
            <a href="#" id="show-sidenav" data-target="slide-out" class="sidenav-trigger"><i
                        class="material-icons grey-text collapsed-button-sidenav-icon">fast_forward</i></a>
        </div>
    </div>
@endif
<!-- NavBar colapsada contendo as opções da NavBar e da SideBar-->
<ul class="sidenav" id="mobile-demo">
    <li style="text-align: center"><a href="{{ route('myProfile') }}"><img class="circle responsive-img"
                                                                           src="{{Auth::user()->profile_photo}}"
                                                                           style="width: 2rem; height: 2rem; vertical-align:middle; text-align:center;"> {{ Auth::user()->name }}
        </a>
    </li>
    <li><a href="{{ route('home') }}">Página Inicial</a></li>
    <div class="divider"></div>
    @if(Auth::user()->active && Auth::user()->email != env('USER_ROOT_MAIL'))
        {{-- @if(session('admin')) --}}
        <li><a href="{{ route('listarPeriodos') }}">Períodos</a></li>
        <li><a href="{{ route('listarPlanos') }}">Listar Planos</a></li>
        <li><a href="{{ route('listarRelatorios') }}">Listar Relatórios</a></li>
        <li><a href="{{ route('listarUsuarios') }}">Ver Usuários</a></li>
        <div class="divider"></div>
        {{-- @endif --}}
        <li><a href="{{ route('meusPlanos') }}">Meus Planos</a></li>
        <li><a href="{{ route('preencherPlano') }}">Preencher Plano</a></li>
        <li><a href="{{ route('meusRelatorios') }}">Meus Relatórios</a></li>
        <li><a href="{{ route('preencherRelatorio') }}">Preencher Relatório</a></li>
        <div class="divider"></div>
    @endif
    <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
</ul>