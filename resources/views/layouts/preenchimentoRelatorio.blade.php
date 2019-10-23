@extends('layouts.app')

@section('content')

    <nav class="nav-extended amber darken-3">
        <div class="nav-content">
            <ul class="tabs tabs-transparent tabs-fixed-width">
                <li class="tab" id="opAulas"><a href="#" onclick="submitFormRelatorio(1)">Aulas</a></li>
                <li class="tab" id="opEnsino"><a href="#" onclick="submitFormRelatorio(2)">Ensino</a></li>
                <li class="tab" id="opPesquisa"><a href="#" onclick="submitFormRelatorio(3)">Pesquisa</a></li>
                <li class="tab" id="opExtensao"><a href="#" onclick="submitFormRelatorio(4)">Extensão</a></li>
                <li class="tab" id="opAdministrativas"><a href="#" onclick="submitFormRelatorio(5)">Administrativas</a></li>
                <li class="tab" id="opGeral"><a href="#" onclick="submitFormRelatorio(6)">Geral</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 1rem; padding-top: 1rem; padding-bottom: 1rem;">
        @yield('abaPreenchimento')
    </div>

    <script>
        /*
         * COMUNS A TODAS AS ABAS
         */
        $(function(){
            $('.modal').modal();
            $("#formRelatorio input[type=checkbox]").on("change", function () {
                if($(this).is(':checked')){
                    $(this).closest("tr").find("textarea").prop({'disabled':false}).focus();
                }else{
                    $(this).closest("tr").find("textarea").prop({'disabled':true}).prop({'style':''});
                }
            });
        });

        function submitFormRelatorio(proximaAba){
            var checados = $("#formRelatorio input[type=checkbox]:checked");
            for(i=0; i<checados.length; i++){
                var linha = $(checados[i]).closest();
                console.log(linha);
                if($(linha).find("textarea").val() == ""){
                    alert("Desmarque a coluna À Justificar ou preencha a justificativa para a disciplina " + $(linha).find("td:first").html());
                }
            }
            $("#formRelatorio").prepend("<input type='hidden' value='" + proximaAba + "' name='proximaAba' />");
            $("#formRelatorio").attr('action', '{{ route('salvarRelatorio') }}').submit();
        }
    </script>

@endsection