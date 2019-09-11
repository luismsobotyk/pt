@extends('layouts.preenchimentoRelatorio')

@section('abaPreenchimento')

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5>Instruções de Preenchimento</h5>
            <br/>
            <div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect btn-flat">ENTENDIDO</a>
        </div>
    </div>

    <form method="post" id="formExtensao" class="col s12" action="#">
        @csrf
        <div class="row" style="margin-top: 2%;">

            <table>
                <thead>
                <tr>
                    <th>Atividade</th>
                    <th>CH</th>
                    <th>A Justificar</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Atividade A</td>
                    <td>2</td>
                    <td>
                        <label>
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Atividade B</td>
                    <td>1</td>
                    <td>
                        <label>
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Atividade C</td>
                    <td>3</td>
                    <td>
                        <label>
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Atividade D</td>
                    <td>2</td>
                    <td>
                        <label>
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Atividade E</td>
                    <td>1</td>
                    <td>
                        <label>
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <h6>Justificativa:</h6>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                    <div>
                        <span class="helper-text right" data-error="wrong" data-success="right">Não sabe como deve preencher? Clique <a
                                    class="modal-trigger" href="#modal1">aqui</a>.</span>
                    </div>
                </div>
            </div>
        </div>


        <footer class="page-footer grey lighten-3 grey-text">
            <div class="row">
                <div class="col s6 left-align">
                    <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                            form="formExtensao" formaction="{{ route('preencherRelatorio', 3) }}">Anterior
                        <i class="material-icons left">arrow_back</i>
                    </button>
                </div>
                <div class="col s6 right-align">
                    <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                            form="formExtensao" formaction="{{ route('preencherRelatorio', 5) }}">Próxima
                        <i class="material-icons right">arrow_forward</i>
                    </button>
                </div>
            </div>
        </footer>

    </form>


    <script>
        $(document).ready(function () {
            $('.modal').modal();
        });

        // Alterando aba ativa no layout de preenchimento e setando funções onClick com os links corretos de cada aba.
        $("#opExtensao").addClass("active");

        $("#opAulas a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 1) }}').submit();
        });

        $("#opEnsino a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 2) }}').submit();
        });

        $("#opPesquisa a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 3) }}').submit();
        });

        $("#opExtensao a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 4) }}').submit();
        });

        $("#opAdministrativas a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 5) }}').submit();
        });

        $("#opGeral a").on("click", function () {
            $("#formExtensao").attr('action', '{{ route('preencherRelatorio', 6) }}').submit();
        });

    </script>

@endsection