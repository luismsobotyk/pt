@extends('layouts.app')

@section('content')

    <div class="container margin-6-top">

        <div class="row">
            <div class="col s6 left-align">
                <h5>Períodos: </h5>
            </div>
            <div class="col s6 right-align">
                <a href="{{ route('novoPeriodo') }}" class="waves-effect waves-light btn amber darken-3"><i
                            class="material-icons left">add</i>Novo Período</a>
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

            @foreach($periodos as $p)
                <tr>
                    <td>{{ $p->period }}</td>
                    <td>{{ date('d/m/Y', strtotime($p->work_plan_opening_date)) }}{{-- $p->work_plan_opening_date --}}</td>
                    <td>{{ date('d/m/Y', strtotime($p->work_plan_closing_date)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($p->report_opening_date)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($p->report_closing_date)) }}</td>
                    <td><a href="{{ route('editarPeriodo', $p->id) }}" class="black-text tooltipped"
                           data-position="left"
                           data-tooltip="Editar Período"><i class="material-icons">edit</i></a>
                        <a href="{{ route('listarPlanos', $p->id) }}" class="black-text tooltipped"
                           data-position="right"
                           data-tooltip="Ver Planos desse Período"><i class="material-icons">search</i></a></td>
                </tr>
            @endforeach

            </tbody>

        </table>

        @if($periodos->count() == 0)
            <br/>
            <i>Não existem períodos cadastrados</i>
        @endif
    </div>
    <script type="application/javascript">
        $(document).ready(function () {
            $('.tooltipped').tooltip();
        });
    </script>
@endsection
