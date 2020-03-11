@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 6rem;">
        <div class="row">

            <div class="col x6 l6 m12 s12">
                <img class="circle responsive-img" src="{{Auth::user()->profile_photo}}"
                     style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">
                <br/>
                <br/>
                <h4>{{ Auth::user()->name }}</h4>
            </div>
            @if(Auth::user()->registerPlan &&
                $hoje->gte($PeriodoAtual->work_plan_opening_date)  &&
                $hoje->lte($PeriodoAtual->work_plan_closing_date)  &&
                !$WorkPlanAtual)
                <div class="col xl3 l6 m6 s12">
                    <div class="card">
                        <div class="card-content">
                            <p><b>NOVO PLANO</b></p>
                            <p class="font4-margin10 grey-text text-lighten-1"><i class="medium material-icons" style="vertical-align: bottom;">assignment</i></p>
                        </div>
                        <div class="card-tabs">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a href="{{ route('preencherPlano', $PeriodoAtual->id) }}">PREENCHER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if(Auth::user()->registerPlan &&
                $hoje->gte($PeriodoAtual->report_opening_date)  &&
                $hoje->lte($PeriodoAtual->report_closing_date)  &&
                !$ReportAtual)
                <div class="col xl3 l6 m6 s12">
                    <div class="card">
                        <div class="card-content">
                            <p><b>NOVO RELATÓRIO</b></p>
                            <p class="font4-margin10 grey-text text-lighten-1"><i class="medium material-icons" style="vertical-align: bottom;">format_list_bulleted</i></p>
                        </div>
                        <div class="card-tabs">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a href="#test4">PREENCHER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

{{--            <div class="col xl3 l6 m6 s12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-content">--}}
{{--                        <p>INFORMAÇÃO:</p>--}}
{{--                        <p class="font4-margin10">1</p>--}}
{{--                    </div>--}}
{{--                    <div class="card-tabs">--}}
{{--                        <ul class="tabs tabs-fixed-width">--}}
{{--                            <li class="tab"><a href="#test4">AÇÃO</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col xl3 l6 m6 s12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-content">--}}
{{--                        <p>INFORMAÇÃO:</p>--}}
{{--                        <p class="font4-margin10">1</p>--}}
{{--                    </div>--}}
{{--                    <div class="card-tabs">--}}
{{--                        <ul class="tabs tabs-fixed-width">--}}
{{--                            <li class="tab"><a href="#test4">AÇÃO</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

        @include('includes.alerts')

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <p>ULTIMOS LOGINS:</p>
                        <p><i>Use tables</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
