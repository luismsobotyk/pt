@extends('layouts.app')

@section('content')
    <nav class="nav-extended amber darken-3">
        <div class="nav-content">
            <ul class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab" id="opIdentificacao"><a href="{{ route('preencherPlano', [$Period->id, 1]) }}">Identificação</a></li>
                <li class="tab" id="opAulas"><a href="{{ route('preencherPlano', [$Period->id, 2]) }}">Aulas</a></li>
                <li class="tab" id="opEnsino"><a href="{{ route('preencherPlano', [$Period->id, 3]) }}">Ensino</a></li>
                <li class="tab" id="opPesquisa"><a href="{{ route('preencherPlano', [$Period->id, 4]) }}">Pesquisa</a></li>
                <li class="tab" id="opExtensao"><a href="{{ route('preencherPlano', [$Period->id, 5]) }}">Extensão</a></li>
                <li class="tab" id="opAdministrativas"><a href="{{ route('preencherPlano', [$Period->id, 6]) }}">Administrativas</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 1rem;">
        <div class="row">
            <div class="col s6">
                <div class="card blue-grey lighten-4" style="height: 6rem">
                    <div class="card-content white-text">

                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card" style="background: #394f67; height: 6rem">
                    <div class="card-content white-text">
                        <div class="progress">
                            <div class="determinate" style="width: 57.5%"></div>
                        </div>
                        <div class="row">
                            <div class="col s8 left-align">
                                Carga Horária:
                            </div>
                            <div class="col s4 right-align">
                                <p>23/40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"
         style="border-top: 1px solid #bdbdbd; margin-top: 1rem; padding-top: 1rem; padding-bottom: 1rem;">
        @yield('abaPreenchimento')
    </div>
@endsection