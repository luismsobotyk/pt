@extends('layouts.app')

@section('content')
    <div class="container margin-6-top">
        <form class="col s12" id="setDirector" method="post" onsubmit="validate()">
            @csrf
            <div class="row">
                @php
                    $diretor = $users->first(function ($user) {return $user->director;})
                @endphp
                <div class="col s6 left-align">
                    <h5>@if($diretor) Diretor atual: {{$diretor->name}} @else Selecione o novo diretor: @endif</h5>
                </div>
                <div class="col s6 right-align">
                    <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                            form="setDirector" formaction="{{ route('setdirector') }}"> Salvar Alteração
                        <i class="material-icons left">save</i>
                    </button>
                </div>
            </div>
            <input type="text" id="myInput" onkeyup="usersFilter()" placeholder="Digite o nome ou email do usuário..."
                   title="Digite o nome ou email do usuário...">
            <table class="highlight table">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody id="user_list">
                @foreach($users as $user)
                    <tr>
                        <td>
                            <label>
                                <input class="with-gap" name="user_id" type="radio" value="{{$user->id}}"
                                       @if($user->director) checked @endif/>
                                <span></span>
                            </label>
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
    <script>
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