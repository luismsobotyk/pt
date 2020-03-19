@extends('layouts.app')

@section('content')
    <nav class="nav-extended amber darken-3">
        <div class="nav-content">
            <ul class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab" id="opIdentificacao"><a href="#" onclick="submitFormPlano(1)">Identificação</a></li>
                <li class="tab" id="opAulas"><a href="#" onclick="submitFormPlano(2)">Aulas</a></li>
                <li class="tab" id="opEnsino"><a href="#" onclick="submitFormPlano(3)">Ensino</a></li>
                <li class="tab" id="opPesquisa"><a href="#" onclick="submitFormPlano(4)">Pesquisa</a></li>
                <li class="tab" id="opExtensao"><a href="#" onclick="submitFormPlano(5)">Extensão</a></li>
                <li class="tab" id="opAdministrativas"><a href="#" onclick="submitFormPlano(6)">Administrativas</a></li>
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
    <script type="application/javascript">
        function submitFormPlano(proximaAba){
            $("#formPlano").prepend("<input type='hidden' value='" + {{$WorkPlan->id}} + "' name='plan_id' />");
            $("#formPlano").prepend("<input type='hidden' value='" + {{$Period->id}} + "' name='periodo' />");
            $("#formPlano").prepend("<input type='hidden' value='" + proximaAba + "' name='proximaAba' />");
            $("#formPlano").attr('action', '{{ route('salvarPlano') }}').submit();
        }
    </script>
@endsection