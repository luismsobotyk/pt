@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 5rem;">

        <div class="row">
            <div class="col xl6 l6 m12 s12">
                <img class="circle responsive-img z-depth-2" src="{{Auth::user()->profile_photo}}"
                     style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">

                <br/>

                <h5>{{ Auth::user()->name }}</h5>
                <h7>{{ Auth::user()->email }}</h7>

                <br/>
                <br/>

                <div class="divider"></div>

                <table>
                    <tbody>


                    <tr>
                        <td>Área de Conhecimento: <b>Área Tal</b></td>
                    </tr>

                    <tr>
                        <td>Magistério: <b>Magistério EBTT ou ES</b></td>
                    </tr>

                    <tr>
                        <td>Regime de Trabalho: <b>40h</b></td>
                    </tr>

                    <tr>
                        <td>Este usuário está com o plano <b>2019/2 em aberto</b></td>
                    </tr>

                    <tr>
                        <td>Este usuário está com o relatório <b>2019/1 em aberto</b></td>
                    </tr>


                    </tbody>
                </table>

            </div>
            <div class="col xl6 l6 m12 s12 margin-2-top">
                <div class="right-align">
                    <i>
                        Ultimo Acesso: 10/09/2019
                        <br/>
                        Atualizado em: 12/09/2019
                    </i>
                </div>
                <br/>
                <div class="left">
                    <h5>Permissões do Usuário:</h5>
                </div>

                <table class="col s10 offset-s1 striped margin-2-top">
                    <tbody>


                    <tr>
                        <td>Registrar Plano</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i></td>
                    </tr>

                    <tr>
                        <td>Ver Planos</b></td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i></td>
                    </tr>

                    <tr>
                        <td>Listar Usuários</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i></td>
                    </tr>

                    <tr>
                        <td>Mudar Permissões</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i></td>
                    </tr>

                    <tr>
                        <td>Abrir Período para envio de Plano/Relatório</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i></td>
                    </tr>

                    <tr>
                        <td>Aprovar planos e/ou relatórios</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i></td>
                    </tr>

                    <tr>
                        <td>Reabrir planos e/ou relatórios</td>
                        <td><i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col xl6 l6 m12 s12 offset-xl6 offset-l6 offset-m0 offset-s0 right-align">
                <a href="{{ route('editarPermissao', 1) }}" class="waves-effect waves-light btn amber darken-3"><i class="material-icons left">settings</i>Editar Permissões</a>
            </div>
        </div>

    </div>

    <script type="application/javascript">
        $(document).ready(function () {
            $('.tooltipped').tooltip();
        });
    </script>

@endsection
