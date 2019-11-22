@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 4rem;">

        <div class="row left">
            <h5>Usuários: </h5>
        </div>
        <input type="text" id="myInput" onkeyup="usersFilter()" placeholder="Digite o nome ou email do usuário..."
               title="Digite o nome ou email do usuário...">
        <table class="highlight table-responsive">
            <thead>
            <tr>
                <th>Nome</th>
                <th class="hidden-xs hidden-sm">Emails</th>
                <th>Ultimo Login</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody id="user_list">
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td class="hidden-xs hidden-sm">{{$user->email}}</td>
                <td>XX/XX/XXXX</td>
                <td><a href="{{ route('verUsuario', $user->id) }}" class="black-text tooltipped" data-position="left" data-tooltip="Ver informações do Usuário"><i class="material-icons">info_outline</i></a>
                    <a href="{{ route('editarPermissao', $user->id) }}" class="black-text tooltipped" data-position="right" data-tooltip="Implantar/Editar permissões do Usuário"><i class="material-icons padding-1-left">settings</i></a></td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });

        function usersFilter() {
            var input, filter, lista, tr, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            lista = document.getElementById("user_list");
            tr = lista.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                txtValue = tr[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>
@endsection