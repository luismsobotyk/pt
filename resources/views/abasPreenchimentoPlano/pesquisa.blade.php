@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')

    <!-- Modal com exemplos de atividades de Pesquisa -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5>Algumas atividades de Pesquisa:</h5>
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
        <form class="col s12" id="formPesquisa" method="post">
            @csrf

            <div class="input-field col xl9 l9 m9 s12">
                <input type="text" id="activity" name="activity">
                <label for="activity">Nome da atividade</label>
                <span class="helper-text left" data-error="wrong" data-success="right">Quais atividades se enquadram em Atividades de Pesquisa? Clique <a class="modal-trigger" href="#modal1">aqui</a>.</span>
            </div>

            <div class="input-field col xl3 l3 m3 s12">
                <input type="number" id="workload" name="workload" min="0" max="40">
                <label for="workload">Carga Horária</label>
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
            <div class="input-field col xl7 l7 m7 s12">
                <input type="text" id="activity" name="activity" value="Atividade A" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">Carga Horária</label>
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
            <div class="input-field col xl7 l7 m7 s12">
                <input type="text" id="activity" name="activity" value="Atividade B" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">Carga Horária</label>
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
            <div class="input-field col xl7 l7 m7 s12">
                <input type="text" id="activity" name="activity" value="Atividade C">
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4">
                <label for="workload">Carga Horária</label>
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
            <div class="input-field col xl7 l7 m7 s12">
                <input type="text" id="activity" name="activity" value="Atividade D" disabled>
                <label for="activity">Atividade</label>
            </div>
            <div class="input-field col xl3 l3 m3 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">Carga Horária</label>
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
                        form="formPesquisa" formaction="{{ route('preencherPlano', 3) }}">Anterior
                    <i class="material-icons left">arrow_back</i>
                </button>
            </div>
            <div class="col s6 right-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                        form="formPesquisa" formaction="{{ route('preencherPlano', 5) }}">Próxima
                    <i class="material-icons right">arrow_forward</i>
                </button>
            </div>
        </div>
    </footer>



    <script type="application/javascript">
        $(document).ready(function(){
            $('.modal').modal();
        });

        // Alterando aba ativa no layout de preenchimento e setando funções onClick com os links corretos de cada aba.
        $("#opPesquisa").addClass("active");


        $("#opIdentificacao a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 1) }}').submit();
        });

        $("#opAulas a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 2) }}').submit();
        });

        $("#opEnsino a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 3) }}').submit();
        });

        $("#opPesquisa a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 4) }}').submit();
        });

        $("#opExtensao a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 5) }}').submit();
        });

        $("#opAdministrativas a").on("click", function () {
            $("#formPesquisa").attr('action', '{{ route('preencherPlano', 6) }}').submit();
        });
    </script>

@endsection