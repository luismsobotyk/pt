@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 4rem;">

        <div class="row left">
            <h5>Usuários: </h5>
        </div>

        <table class="highlight responsive-table">

            <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox"/>
                        <span></span>
                    </label>
                </th>
                <th>Nome</th>
                <th>Ultimo Login</th>
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
                <td>Alvin</td>
                <td>24/10/2019</td>
                <td><a href="{{ route('verUsuario', 1) }}" class="black-text tooltipped" data-position="left" data-tooltip="Ver informações do Usuário"><i class="material-icons">info_outline</i></a>
                    <a href="{{ route('editarPermissao', 1) }}" class="black-text tooltipped" data-position="right" data-tooltip="Implantar/Editar permissões do Usuário"><i class="material-icons padding-1-left">settings</i></a></td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="checkbox"/>
                        <span></span>
                    </label>
                </td>
                <td>Alan</td>
                <td>02/05/2018</td>
                <td><a href="{{ route('verUsuario', 1) }}" class="black-text tooltipped" data-position="left" data-tooltip="Ver informações do Usuário"><i class="material-icons">info_outline</i></a>
                    <a href="{{ route('editarPermissao', 1) }}" class="black-text tooltipped" data-position="right" data-tooltip="Implantar/Editar permissões do Usuário"><i class="material-icons padding-1-left">settings</i></a></td>
            <tr>
                <td>
                    <label>
                        <input type="checkbox"/>
                        <span></span>
                    </label>
                </td>
                <td>Jonathan</td>
                <td>Nunca Acessou</td>
                <td><a href="{{ route('verUsuario', 1) }}" class="black-text tooltipped" data-position="left" data-tooltip="Ver informações do Usuário"><i class="material-icons">info_outline</i></a>
                    <a href="{{ route('editarPermissao', 1) }}" class="black-text tooltipped" data-position="right" data-tooltip="Implantar/Editar permissões do Usuário"><i class="material-icons padding-1-left">settings</i></a></td>
            </tr>
            </tbody>

        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });
    </script>
@endsection