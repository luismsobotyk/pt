@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 6rem;">
        <form action="{{ route('salvarPeriodo', 1) }}" method="post">
            @csrf
            <h5>Editando Período: 2019/1</h5>
            <br/>


            <div class="row margin-6-top">

                <div class="input-field col xl6 l6 m6 s12">
                    <input type="date" class="datepicker" name="work_plan_opening_date" value="{{ $periodo->work_plan_opening_date }}">
                    <label for="workPlanOpeningDate">Data de Abertura do Plano</label>
                </div>
                <div class="input-field col xl6 l6 m6 s12">
                    <input type="date" class="datepicker" name="work_plan_closing_date" value="{{ $periodo->work_plan_closing_date }}">
                    <label for="workPlanClosingDate">Data de Fechamento do Plano</label>
                </div>

                <div class="input-field col xl6 l6 m6 s12">
                    <input type="date" class="datepicker" name="report_opening_date" value="{{ $periodo->report_opening_date }}">
                    <label for="reportOpeningDate">Data de Abertura do Relatório</label>
                </div>
                <div class="input-field col xl6 l6 m6 s12">
                    <input type="date" class="datepicker" name="report_closing_date" value="{{ $periodo->report_closing_date }}">
                    <label for="reportClosingDate">Data de Fechamento do Relatório</label>
                </div>

            </div>

            <div class="row">
                <div class="col xl12 l12 m12 s12 right-align">
                    <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action">Salvar
                        <i class="material-icons left">save</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#period').mask('0000/0');
        });
    </script>
@endsection