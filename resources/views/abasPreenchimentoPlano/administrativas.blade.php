salvarAdministrativas@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')
    <!-- Modal com exemplos de atividades de Extensão -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5>Algumas atividades de Administrativas:</h5>
            <br />
            <div >
                <p>
                    Atividade 01 -
                    Atividade 02 -
                    Atividade 03 -
                    Atividade 04 -
                    Atividade 05 -
                    Atividade 06 -
                    Atividade 07 -
                    Atividade 08 -
                    Atividade 09 -
                    Atividade 10 -
                </p>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect btn-flat">ENTENDIDO</a>
        </div>
    </div>



    <div class="row" style="margin-top: 2%;">
        <form class="col s12" id="formAdministrativas" method="post">
            @csrf

            <div class="input-field col xl6 l6 m6 s12">
                <input type="text" id="activity" name="activity">
                <label for="activity">Nome da atividade</label>
                <span class="helper-text left" data-error="wrong" data-success="right">Quais atividades se enquadram em Atividades Administrativas? Clique <a class="modal-trigger" href="#modal1">aqui</a>.</span>
            </div>

            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40">
                <label for="workload">Carga Horária</label>
            </div>

            <div class="input-field col xl3 l3 m3 s12">
                <input type="text" class="ordinance" name="ordinance">
                <label for="ordinance">Portaria</label>
            </div>

            <div class="col s6 offset-s6 right-align ">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action">Adicionar
                    <i class="material-icons right">add_circle_outline</i>
                </button>
            </div>
        </form>
    </div>

    <div class="divider"></div>

    <div class="row" style="margin-top: 2%;">
        <div class="row">
            <div class="col s10 left-align offset-s1">
                <h6>Atividades adicionadas:</h6>
            </div>
        </div>

        <!-- LINHAS ADICIONADAS -->

        <div class="row">
            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="activity" name="activity" value="Atividade A" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">Carga Horária</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="text" class="ordinance" name="ordinance" value="1/2019" disabled>
                <label for="ordinance">Portaria</label>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">edit</i>
                </a>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="activity" name="activity" value="Atividade B" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40" value="1" disabled>
                <label for="workload">Carga Horária</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="text" class="ordinance" name="ordinance" value="2/2019" disabled>
                <label for="ordinance">Portaria</label>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">edit</i>
                </a>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="activity" name="activity" value="Atividade C sendo editada">
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40" value="3">
                <label for="workload">Carga Horária</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="text" class="ordinance" name="ordinance" value="3/2019">
                <label for="ordinance">Portaria</label>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">save</i>
                </a>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="activity" name="activity" value="Atividade D" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">Carga Horária</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="text" class="ordinance" name="ordinance" value="4/2019" disabled>
                <label for="ordinance">Portaria</label>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">edit</i>
                </a>
            </div>
            <div class="input-field col xl1 l1 m1 s2">
                <a href="#!" class="black-text">
                    <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>
                </a>
            </div>
        </div>


    </div>



    <footer class="page-footer grey lighten-3 grey-text">
        <div class="row">
            <div class="col s6 left-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                        form="formAdministrativas" formaction="{{ route('salvarAdministrativas', 5) }}">Anterior
                    <i class="material-icons left">arrow_back</i>
                </button>
            </div>
            <div class="col s6 right-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                        form="formAdministrativas" formaction="{{ route('salvarPlano') }}">Concluir e Enviar
                    <i class="material-icons right">save</i>
                </button>
            </div>
        </div>
    </footer>



    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $(".ordinance").mask('#9/9999', {reverse: true});
        });


        // Alterando aba ativa no layout de preenchimento e setando funções onClick com os links corretos de cada aba.
        $("#opAdministrativas").addClass("active");

        $("#opIdentificacao a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 1) }}').submit();
        });

        $("#opAulas a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 2) }}').submit();
        });

        $("#opEnsino a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 3) }}').submit();
        });

        $("#opPesquisa a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 4) }}').submit();
        });

        $("#opExtensao a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 5) }}').submit();
        });

        $("#opAdministrativas a").on("click", function () {
            $("#formAdministrativas").attr('action', '{{ route('salvarAdministrativas', 6) }}').submit();
        });
    </script>

@endsection