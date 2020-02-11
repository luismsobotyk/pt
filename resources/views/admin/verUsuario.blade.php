@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 5rem;">

        <div class="row">
            <div class="col xl6 l6 m12 s12">
                <img class="circle responsive-img z-depth-2" src="{{$user->profile_photo}}"
                     style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">

                <br/>

                <h5>{{ $user->name }}</h5>
                <h6>{{ $user->email }}</h6>

                <br/>
                <br/>

                <div class="divider"></div>

                <table>
                    <tbody>
                    <tr>
                        <td>Área de Conhecimento: <b>{{ $user->knowledge_area }}</b></td>
                    </tr>
                    <tr>
                        <td>Magistério: <b>{{ $user->teaching }}</b></td>
                    </tr>
                    <tr>
                        <td>Regime de Trabalho: <b>{{ $user->regime }}</b></td>
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
                        Ultimo Acesso: XX/XX/XXXX
                        <br/>
                        Atualizado em: XX/XX/XXXX
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
                        <td>
                            @if($user->registerPlan)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                                @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Ver Planos</b></td>
                        <td>
                            @if($user->seePlans)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Listar Usuários</td>
                        <td>
                            @if($user->seeUsersList)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Mudar Permissões</td>
                        <td>
                            @if($user->setPermissions)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Abrir Período para envio de Plano/Relatório</td>
                        <td>
                            @if($user->setSubmissionPeriod)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Aprovar planos e/ou relatórios</td>
                        <td>
                            @if($user->approveDocuments)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Reabrir planos e/ou relatórios</td>
                        <td>
                            @if($user->reopenPlans)
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Autorizado">check</i>
                            @else
                                <i class="material-icons tooltipped" data-position="right" data-tooltip="Não autorizado">close</i>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col xl6 l6 m12 s12 offset-xl6 offset-l6 offset-m0 offset-s0 right-align">
                <a href="{{ route('editarPermissao', $user->id) }}" class="waves-effect waves-light btn amber darken-3"><i class="material-icons left">settings</i>Editar Permissões</a>
            </div>
        </div>
    </div>
@endsection
