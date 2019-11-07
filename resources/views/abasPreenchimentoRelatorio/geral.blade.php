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

    <br/>


    <form method="post" id="formRelatorio" class="col s12" action="#">
        @csrf
        {{$erro = false}}
        @if(is_null($identification) || is_null($period) || is_null($report))
            {{$erro = true}}
            Erro: Dados de identificação, período e relatório são necessários para exibição desta view!
        @else
            <div class="row">
                <div class="col s12 m7 l7 xl7">
                    Você preencheu <b>{{$identification->regime}} horas</b> totais. Informe quantas horas você cumpriu:
                </div>
                <div class="col s12 m5 l5 xl5">
                    <input type="number" id="fulfilled_workload" name="fulfilled_workload" min="0" max="40">
                    <label for="workloadFulfilled">Carga Horária Cumprida</label>
                </div>
            </div>

            <br/>

            <div class="divider"></div>

            <br/>

            <div class="row">
                <h6>Observações sobre a Carga Horária Geral:</h6>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="hidden" name="plan_id" id="plan_id" value="{{$identification->plan_id}}">
                        <input type="hidden" name="period_id" id="period_id" value="{{$period->id}}">
                        <textarea id="report_justification" name="report_justification"
                                  class="materialize-textarea">@if(count($report) > 0 && $report->justifications_id > 0){{$report->justification}}@endif</textarea>
                        <label for="report_justification"></label>
                        <div>
                        <span class="helper-text right" data-error="wrong" data-success="right">Não sabe como deve preencher? Clique <a
                                    class="modal-trigger" href="#modal1">aqui</a>.</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
            <footer class="page-footer grey lighten-3 grey-text">
                <div class="row">
                    <div class="col s6 left-align">
                        <button class="btn waves-effect waves-light amber darken-3" onclick="submitFormRelatorio(5)">
                            Anterior
                            <i class="material-icons left">arrow_back</i>
                        </button>
                    </div>
                    <div class="col s6 right-align">
                        <button @if($erro) disabled @endif class="btn waves-effect waves-light amber darken-3" onclick="submitFormRelatorio()">
                            Concluir e Enviar
                            <i class="material-icons right">save</i>
                        </button>
                    </div>
                </div>
            </footer>

    </form>

@endsection