@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 1rem;">



        <form action="{{ route('salvarMinhasInfosEditadas') }}" method="post">

            @csrf

            <div class="row">
                <div class="col s6 offset-s3">
                    <img class="circle responsive-img z-depth-2" src="{{Auth::user()->profile_photo}}"
                         style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="name" name="name" type="text" class="validate" value="{{ Auth::user()->name }}">
                    <label for="name">Nome</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input disabled id="email" type="text" class="validate " value="{{ Auth::user()->email }}">
                    <label for="email">E-mail</label>
                    <span class="helper-text left-align" data-error="wrong" data-success="right">Você não pode editar seu e-mail</span>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="knowledge_area" name="knowledge_area" type="text" class="validate" value="{{ Auth::user()->knowledge_area }}">
                    <label for="knowledge_area">Área de Conhecimento</label>
                </div>
            </div>

            <div class="row">
                <div class="col s6 offset-s3">
                    <div class="col xl4 l4 m4 s6" style="margin-top: 1rem;">
                        <p class="grey-text">Magistério:</p>
                    </div>
                    <div class="input-field col xl4 l4 m4 s4">
                        <label>
                            @if(Auth::user()->teaching == 'EBTT')
                                <input class="with-gap" name="teaching" type="radio" value="EBTT" checked/>
                            @else
                                <input class="with-gap" name="teaching" type="radio" value="EBTT" />
                            @endif
                                <span>EBTT</span>
                        </label>
                    </div>
                    <div class="input-field col xl4 l4 m4 s4">
                        <label>
                            @if(Auth::user()->teaching == 'ES')
                                <input class="with-gap" name="teaching" type="radio" value="ES" checked/>
                            @else
                                <input class="with-gap" name="teaching" type="radio" value="ES"/>
                            @endif
                            <span>ES</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s6 offset-s3">
                    <div class="col xl2 l2 m2 s6" style="margin-top: 1rem;">
                        <p class="grey-text">Regime:</p>
                    </div>
                    <div class="input-field col xl2 l2 m2 s6">
                        <label>
                            @if(Auth::user()->regime == '20')
                                <input class="with-gap" name="regime" type="radio" value="20" checked/>
                            @else
                                <input class="with-gap" name="regime" type="radio" value="20"/>
                            @endif
                            <span>20h</span>
                        </label>
                    </div>
                    <div class="input-field col xl2 l2 m2 s6">
                        <label>
                            @if(Auth::user()->regime == '40')
                                <input class="with-gap" name="regime" type="radio" value="40" checked/>
                            @else
                                <input class="with-gap" name="regime" type="radio" value="40"/>
                            @endif
                            <span>40h</span>
                        </label>
                    </div>
                    <div class="input-field col xl2 l2 m2 s6">
                        <label>
                            @if(Auth::user()->regime == 'DE')
                                <input class="with-gap" name="regime" type="radio" value="DE" checked/>
                            @else
                                <input class="with-gap" name="regime" type="radio" value="DE"/>
                            @endif
                            <span>DE</span>
                        </label>
                    </div>
                    <div class="input-field col xl2 l2 m2 s6 offset-s6">
                        <label>
                            @if(Auth::user()->regime == 'Visitante')
                                <input class="with-gap" name="regime" type="radio" value="Visitante" checked/>
                            @else
                                <input class="with-gap" name="regime" type="radio" value="Visitante"/>
                            @endif
                            <span>Visitante</span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col s6 offset-s3 right-align">
                    <button id="saveInfos" class="btn-floating tooltipped amber darken-3" data-position="top" data-tooltip="Salvar"
                       type="submit" name="action"><i class="material-icons">save</i></button>
                </div>
            </div>

        </form>
    </div>

    <script type="application/javascript">
        $(document).ready(function () {
            $('.tooltipped').tooltip();
        });
    </script>

@endsection
