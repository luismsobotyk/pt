@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 7rem;">

        <div class="row">
            <div class="col s6 offset-s3">
                <img class="circle responsive-img z-depth-2" src="{{Auth::user()->profile_photo}}"
                     style="width: 15rem; height: 15rem; margin-top:2rem; text-align:center;">

                <br/>

                <h5>{{ Auth::user()->name }}</h5>
                <h7>{{ Auth::user()->email }}</h7>

                <br/>
                <br/>

                <div class="divider"></div>

                <table>
                    <tbody>


                    <tr>
                        <td>Área de Conhecimento: <b>Área Tal</b></td>
                    </tr>

                    <tr>
                        <td>Magistério: <b>Magistério EBTT ou ES</b></td>
                    </tr>

                    <tr>
                        <td>Regime de Trabalho: <b>40h</b></td>
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>

        <br />

        <div class="row">
            <div class="col s6 offset-s3 right-align">
                <a class="btn-floating tooltipped amber darken-3" data-position="bottom" data-tooltip="Editar" href="{{ route('editarMinhasInfos') }}"><i class="material-icons">edit</i></a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });
    </script>

@endsection
