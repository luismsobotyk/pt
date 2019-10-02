@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 4rem;">

        <div class="row left">
            <h5>Usuários: </h5>
        </div>

        <table class="highlight">

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
                <td>a b</td>
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
                <td>a b</td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="checkbox"/>
                        <span></span>
                    </label>
                </td>
                <td>Jonathan</td>
                <td>Nunca Acessou</td>
                <td>a b</td>
            </tr>
            </tbody>

        </table>
    </div>

@endsection