@extends('layouts.app')

@section('content')

    <div class="container margin-6-top">

        <div class="row">
            <div class="col s6 left-align">
                <h5>Períodos: </h5>
            </div>
            <div class="col s6 right-align">
                <a href="{{ route('novoPeriodo') }}" class="waves-effect waves-light btn amber darken-3"><i class="material-icons left">add</i>Novo Período</a>
            </div>
        </div>

        <table class="highlight responsive-table centered">

            <thead>
            <tr>
                <th>Período</th>
                <th>Abertura Plano</th>
                <th>Fechamento Plano</th>
                <th>Abertura Relatório</th>
                <th>Fechamento Relatório</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>2019/2</td>
                <td>01/07/2019</td>
                <td>31/12/2019</td>
                <td>01/01/2020</td>
                <td>02/02/2020</td>
                <td><a href="{{ route('editarPeriodo', 1) }}" class="black-text tooltipped" data-position="left"
                       data-tooltip="Editar Período"><i class="material-icons">edit</i></a>
                    <a href="{{ route('listarPlanos', 20191) }}" class="black-text tooltipped" data-position="right"
                       data-tooltip="Ver Planos desse Período"><i class="material-icons">search</i></a></td>
            </tr>
            <tr>
                <td>2019/1</td>
                <td>01/01/2019</td>
                <td>30/06/2019</td>
                <td>01/07/2019</td>
                <td>01/08/2019</td>
                <td><a href="{{ route('editarPeriodo', 1) }}" class="black-text tooltipped" data-position="left"
                       data-tooltip="Editar Período"><i class="material-icons">edit</i></a>
                    <a href="{{ route('listarPlanos', 20191) }}" class="black-text tooltipped" data-position="right"
                       data-tooltip="Ver Planos desse Período"><i class="material-icons">search</i></a></td>
            </tr>
            <tr>
                <td>2020/2</td>
                <td>01/07/2020</td>
                <td>31/12/2020</td>
                <td>01/01/2020</td>
                <td>02/02/2020</td>
                <td><a href="{{ route('editarPeriodo', 1) }}" class="black-text tooltipped" data-position="left"
                       data-tooltip="Editar Período"><i class="material-icons">edit</i></a>
                    <a href="{{ route('listarPlanos', 20191) }}" class="black-text tooltipped" data-position="right"
                       data-tooltip="Ver Planos desse Período"><i class="material-icons">search</i></a></td>
            </tr>
            <tr>
                <td>2020/1</td>
                <td>01/01/2020</td>
                <td>30/06/2020</td>
                <td>01/07/2019</td>
                <td>01/08/2019</td>
                <td><a href="{{ route('editarPeriodo', 1) }}" class="black-text tooltipped" data-position="left"
                       data-tooltip="Editar Período"><i class="material-icons">edit</i></a>
                    <a href="{{ route('listarPlanos', 20191) }}" class="black-text tooltipped" data-position="right"
                       data-tooltip="Ver Planos desse Período"><i class="material-icons">search</i></a></td>
            </tr>
            </tbody>

        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('.tooltipped').tooltip();
        });
    </script>
@endsection