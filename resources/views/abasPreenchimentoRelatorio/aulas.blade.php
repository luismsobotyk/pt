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
    <form method="post" id="formRelatorio" class="col s12">
        @csrf
        <div class="row" style="margin-top: 2%;">
            <table>
                <thead>
                <tr>
                    <th>Disciplina</th>
                    <th>Curso</th>
                    <th style="text-align: center">CH</th>
                    <th style="text-align: center">A Justificar</th>
                    <th>Justificativa</th>
                </tr>
                </thead>

                <tbody>
                @if (!is_null($classes) && count($classes) > 0) @foreach($classes as $classe)
                <tr>
                    <td>{{$classe->discipline}}</td>
                    <td>{{$classe->course}}</td>
                    <td style="text-align: center">{{$classe->workload}}</td>
                    <td style="text-align: center">
                        <label>
                            <input type="checkbox" @if($classe->justifications_id > 0) checked @endif />
                            <span></span>
                        </label>
                    </td>
                    <td>
                        <textarea id="classe_justification[{{$classe->id}}]" name="classe_justification[{{$classe->id}}]" class="materialize-textarea" @if(is_null($classe->justifications_id)) disabled @endif rows="4" placeholder="Digite a justificativa">@if($classe->justifications_id > 0){{$classe->justification}}@endif</textarea>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">
                        Não existem dados a serem exibidos!
                    </td>
                </tr>
                @endif
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="row">
                <div class="input-field col s12">
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
                    <!--button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                            form="formAulas" formaction="{{ route('preencherRelatorio', 1) }}">Anterior
                        <i class="material-icons left">arrow_back</i>
                    </button-->
                </div>
                <div class="col s6 right-align">
                    <button class="btn waves-effect waves-light amber darken-3" onclick="submitFormRelatorio(2)">Próxima
                        <i class="material-icons right">arrow_forward</i>
                    </button>
                </div>
            </div>
        </footer>

    </form>
@endsection