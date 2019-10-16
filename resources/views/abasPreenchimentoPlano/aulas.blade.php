@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')

    <div class="row" style="margin-top: 2%;">
        <form class="col s12" id="formAulas" method="post">
            @csrf


            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="discipline" name="discipline">
                <label for="discipline">Disciplina</label>
            </div>

            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="course" name="course">
                <label for="course">Curso</label>
            </div>

            <div class="input-field col xl2 l2 m2 s12">
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
                <h6>Aulas adicionadas:</h6>
            </div>
        </div>

                         <!-- LINHAS ADICIONADAS -->

                <div class="row">
                    <div class="input-field col xl4 l4 m4 s12">
                        <input type="text" id="discipline" name="discipline" value="" disabled>
                        <label for="discipline">Disciplina</label>
                    </div>
                    <div class="input-field col xl4 l4 m4 s12">
                        <input type="text" id="course" name="course" value="" disabled>
                        <label for="course">Curso</label>
                    </div>
                    <div class="input-field col xl2 l2 m2 s8">
                        <input type="number" id="workload" name="workload" min="0" max="40" value="" disabled>
                        <label for="workload">CH</label>
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

        <!--   
        <div class="row">
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="discipline" name="discipline" value="Disciplina B" disabled>
                <label for="discipline">Disciplina</label>
            </div>
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="course" name="course" value="Curso B" disabled>
                <label for="course">Curso</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="4" disabled>
                <label for="workload">CH</label>
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
        -->
        <div class="row">
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="discipline" name="discipline" value="Disciplina C sendo editada">
                <label for="discipline">Disciplina</label>
            </div>
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="course" name="course" value="Curso C sendo editado">
                <label for="course">Curso</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="3">
                <label for="workload">CH</label>
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

        <!--
        <div class="row">
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="discipline" name="discipline" value="Disciplina D" disabled>
                <label for="discipline">Disciplina</label>
            </div>
            <div class="input-field col xl4 l4 m4 s12">
                <input type="text" id="course" name="course" value="Curso D" disabled>
                <label for="course">Curso</label>
            </div>
            <div class="input-field col xl2 l2 m2 s8">
                <input type="number" id="workload" name="workload" min="0" max="40" value="1" disabled>
                <label for="workload">CH</label>
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
      -->


    </div>



    <footer class="page-footer grey lighten-3 grey-text">
        <div class="row">
            <div class="col s6 left-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                        form="formAulas" formaction="{{ route('salvarAulas', 1) }}">Anterior
                    <i class="material-icons left">arrow_back</i>
                </button>
            </div>
            <div class="col s6 right-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                        form="formAulas" formaction="{{ route('salvarAulas', 3) }}">Próxima
                    <i class="material-icons right">arrow_forward</i>
                </button>
            </div>
        </div>
    </footer>



    <script>
        // Alterando aba ativa no layout de preenchimento e setando funções onClick com os links corretos de cada aba.
        $("#opAulas").addClass("active");


        $("#opIdentificacao a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 1) }}').submit();
        });

        $("#opAulas a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 2) }}').submit();
        });

        $("#opEnsino a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 3) }}').submit();
        });

        $("#opPesquisa a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 4) }}').submit();
        });

        $("#opExtensao a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 5) }}').submit();
        });

        $("#opAdministrativas a").on("click", function () {
            $("#formAulas").attr('action', '{{ route('salvarAulas', 6) }}').submit();
        });
    </script>

@endsection