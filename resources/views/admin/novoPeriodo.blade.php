@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 6rem;">
        <form action="{{ route('salvarNovoPeriodo') }}" method="post">
            @csrf
            <h5>Configurando Novo Período</h5>
            <br/>
            <div class="row">
                <div class="input-field col xl6 l6 m6 s12">
                    <input id="period" type="text" class="validate">
                    <label for="period">Perído regente</label>
                </div>
            </div>

            <div class="row">

                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" class="datepicker" name="workPlanOpeningDate">
                    <label for="workPlanOpeningDate">Data de Abertura do Plano</label>
                </div>
                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" class="datepicker" name="workPlanClosingDate">
                    <label for="workPlanClosingDate">Data de Fechamento do Plano</label>
                </div>

                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" class="datepicker" name="reportOpeningDate">
                    <label for="reportOpeningDate">Data de Abertura do Relatório</label>
                </div>
                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" class="datepicker" name="reportClosingDate">
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
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
            });
        });
    </script>
@endsection