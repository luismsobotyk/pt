@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 5rem;">
        <form action="{{ route('salvarPermissoes', $user->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col xl6 l6 m12 s12">
                    <img class="circle responsive-img z-depth-2" src="{{$user->profile_photo}}"
                         style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">
                    <br/>
                    <h5>{{ $user->name }} @if($user->director)(Diretor)@endif</h5>
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
                    <table class="s10 offset-s1 striped margin-2-top">
                        <tbody>
                        <tr>
                            <td>Registrar Plano</td>
                            <td><label><input name="registerPlan" type="checkbox" @if($user->registerPlan) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Ver Planos</b></td>
                            <td><label><input name="seePlans" type="checkbox" @if($user->seePlans) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Listar Usuários</td>
                            <td><label><input name="seeUsersList" type="checkbox" @if($user->seeUsersList) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Mudar Permissões</td>
                            <td><label><input name="setPermissions" type="checkbox" @if($user->setPermissions) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Abrir Período para envio de Plano/Relatório</td>
                            <td><label><input name="setSubmissionPeriod" type="checkbox" @if($user->setSubmissionPeriod) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Aprovar planos e/ou relatórios</td>
                            <td><label><input name="approveDocuments" type="checkbox" @if($user->approveDocuments) checked @endif/><span></span></label></td>
                        </tr>
                        <tr>
                            <td>Reabrir planos e/ou relatórios</td>
                            <td><label><input name="reopenPlans" type="checkbox" @if($user->reopenPlans) checked @endif/><span></span></label></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="row">
                <div class="col xl6 l6 m12 s12 offset-xl6 offset-l6 offset-m0 offset-s0 right-align">
                    @if($user->active)
                        <a href="{{ route('setStatus', $user->id) }}" class="waves-effect waves-light btn red darken-3 left"><i class="material-icons left">lock_outline</i>Desativar Usuário</a>
                    @else
                        <a href="{{ route('setStatus', $user->id) }}" class="waves-effect waves-light btn green darken-3 left"><i class="material-icons left">lock_open</i>Ativar Usuário</a>
                    @endif
                    <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action">Salvar
                        Permissões
                        <i class="material-icons left">save</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
