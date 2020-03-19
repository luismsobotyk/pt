@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')
    <div class="row" style="margin-top: 7%;">
        <form class="col s12" id="formPlano" method="post">
            @csrf
            <input type="hidden" name="aba" value="1">
            <div class="row">
                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" id="knowledge_area" class="autocomplete" value="@if($WorkPlan->identification) {{$WorkPlan->identification->knowledge_area}} @else {{\Illuminate\Support\Facades\Auth::user()->knowledge_area}} @endif" name="knowledge_area">
                    <label for="knowledge_area">Área de Conhecimento</label>
                </div>
                <div class="col xl2 l2 m2 s6" style="margin-top: 1rem;">
                    <p class="grey-text">Magistério:</p>
                </div>
                <div class="input-field col xl2 l2 m2 s4">
                    <label>
                        <input class="with-gap" name="teaching" value="EBTT" type="radio" @if($WorkPlan->identification && $WorkPlan->identification->teaching == 'EBTT' || \Illuminate\Support\Facades\Auth::user()->teaching == 'EBTT') checked @endif/>
                        <span>EBTT</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s4">
                    <label>
                        <input class="with-gap" name="teaching" value="ES" type="radio" @if($WorkPlan->identification && $WorkPlan->identification->teaching == 'ES' || \Illuminate\Support\Facades\Auth::user()->teaching == 'ES') checked @endif/>
                        <span>ES</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col xl2 l2 m2 s6" style="margin-top: 1rem;">
                    <p class="grey-text">Regime:</p>
                </div>
                @php
                $regime = $WorkPlan->identification && $WorkPlan->identification->regime ? $WorkPlan->identification->regime : \Illuminate\Support\Facades\Auth::user()->regime;
                @endphp
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" value="20" type="radio" @if($regime == '20') checked @endif>
                        <span>20h</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" value="40" type="radio" @if($regime == '40') checked @endif/>
                        <span>40h</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" value="DE" type="radio" @if($regime == 'DE') checked @endif/>
                        <span>DE</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6 offset-s6">
                    <label>
                        <input class="with-gap" name="regime" value="Visitante" type="radio" @if($regime == 'Visitante') checked @endif/>
                        <span>Visitante</span>
                    </label>
                </div>
            </div>
        </form>
    </div>
    <footer class="page-footer grey lighten-3 grey-text right-align">
        <div class="col s6">
            <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action" onclick="submitFormPlano(2)">Próxima
                <i class="material-icons right">arrow_forward</i>
            </button>
        </div>
    </footer>
@endsection