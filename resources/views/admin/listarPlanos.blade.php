@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 4rem;">
        <div class="row margin-2-top">

            <div class="col s6 left-align">
                <label>Período</label>

                <select class="">
                    @foreach($periodos as $per)
                        <option value="{{ $per->period }}" @if($periodoSelecionado==$per->id) selected @endif>{{ $per->period }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col s6 right-align">
                <br/>
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action">Selecionar
                    <i class="material-icons right">search</i>
                </button>
            </div>
        </div>

        <div class="divider"></div>

        <div class="row left-align margin-2-top">
            <h5>Aprovados:</h5>
            <table class="responsive-table striped">

                <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </th>
                    <th>Usuário</th>
                    <th>Data de Entrega</th>
                    <th>Data de Aprovação</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Imprimir/Salvar"><i class="material-icons">print</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Pré-visualizar"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Imprimir/Salvar"><i class="material-icons">print</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Pré-visualizar"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Imprimir/Salvar"><i class="material-icons">print</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Pré-visualizar"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Imprimir/Salvar"><i class="material-icons">print</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Pré-visualizar"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Imprimir/Salvar"><i class="material-icons">print</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Pré-visualizar"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row left-align margin-2-top">
            <h5>Aguardando Aprovação:</h5>
            <table class="responsive-table striped">

                <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </th>
                    <th>Usuário</th>
                    <th>Data de Entrega</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Sugerir Alteração"><i class="material-icons">add_alert</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                </tbody>

            </table>
        </div>

        <div class="row left-align margin-2-top">
            <h5>Aguardando Alterações:</h5>
            <table class="responsive-table striped">

                <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </th>
                    <th>Usuário</th>
                    <th>Data de Entrega</th>
                    <th>Último Login</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>03/03/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="top" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Aprovar"><i class="material-icons">check</i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row left-align margin-2-top">
            <h5>Não Entregues:</h5>
            <table class="responsive-table striped">
                <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </th>
                    <th>Usuário</th>
                    <th>Último Login:</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Fulano de Tal</td>
                    <td>01/02/2019</td>
                    <td>
                        <a href="#" class="black-text tooltipped" data-position="left" data-tooltip="Pré-Visualização"><i class="material-icons">search</i></a>
                        <a href="#" class="black-text tooltipped" data-position="right" data-tooltip="Notificar"><i class="material-icons">report_problem</i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
@endsection
