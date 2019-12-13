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

            <div class="col xl3 l6 m6 s12">
                <div class="card">
                    <div class="card-content">
                        <p>INFORMAÇÃO:</p>
                        <p class="font4-margin10">1</p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">AÇÃO</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col xl3 l6 m6 s12">
                <div class="card">
                    <div class="card-content">
                        <p>INFORMAÇÃO:</p>
                        <p class="font4-margin10">1</p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">AÇÃO</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col xl3 l6 m6 s12">
                <div class="card">
                    <div class="card-content">
                        <p>INFORMAÇÃO:</p>
                        <p class="font4-margin10">1</p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">AÇÃO</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col xl3 l6 m6 s12">
                <div class="card">
                    <div class="card-content">
                        <p>INFORMAÇÃO:</p>
                        <p class="font4-margin10">1</p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">AÇÃO</a></li>
                        </ul>
                    </div>

                </div>
            </div>

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
