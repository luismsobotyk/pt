@extends('layouts.app')

@section('content')

    <nav class="nav-extended amber darken-3">
        <div class="nav-content">
            <ul class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab" id="opAulas"><a href="#!">Aulas</a></li>
                <li class="tab" id="opEnsino"><a href="#!">Ensino</a></li>
                <li class="tab" id="opPesquisa"><a href="#!">Pesquisa</a></li>
                <li class="tab" id="opExtensao"><a href="#!">Extensão</a></li>
                <li class="tab" id="opAdministrativas"><a href="#!">Administrativas</a></li>
                <li class="tab" id="opGeral"><a href="#!">Geral</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 1rem; padding-top: 1rem; padding-bottom: 1rem;">
        @yield('abaPreenchimento')
    </div>



@endsection