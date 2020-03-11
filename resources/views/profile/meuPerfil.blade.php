@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 7rem;">

        <div class="row">
            <div class="col s6 offset-s3">
                <img class="circle responsive-img z-depth-2" src="{{Auth::user()->profile_photo}}"
                     style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">

                <br/>

                <h5>{{ Auth::user()->name }} @if(Auth::user()->director) (Diretor) @endif</h5>
                <h4>{{ Auth::user()->email }}</h4>

                <br/>
                <br/>
                @if(Auth::user()->active == false)
                    <h5><b>Status:</b> Aguardando liberação de acesso!</h5>
                @endif
                <br/>
                <br/>

                <div class="divider"></div>

                <table>
                    <tbody>
                    <tr>
                        @if(is_null(Auth::user()->knowledge_area))
                            <td>Área de Conhecimento: <b>Não Informado</b></td>
                        @else
                            <td>Área de Conhecimento: <b>{{ Auth::user()->knowledge_area }}</b></td>
                        @endif
                    </tr>

                    <tr>
                        @if(is_null(Auth::user()->teaching))
                            <td>Magistério: <b>Não Informado</b></td>
                        @else
                            <td>Magistério: <b>{{ Auth::user()->teaching }}</b></td>
                        @endif
                    </tr>

                    <tr>
                        @if(is_null(Auth::user()->regime))
                            <td>Regime de Trabalho: <b>Não Informado</b></td>
                        @else
                            <td>Regime de Trabalho: <b>{{ Auth::user()->regime }}</b></td>
                        @endif
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col s6 offset-s3 right-align">
                <a class="btn-floating tooltipped amber darken-3" data-position="bottom" data-tooltip="Editar"
                   href="{{ route('editarMinhasInfos') }}"><i class="material-icons">edit</i></a>
            </div>
        </div>
    </div>
@endsection
