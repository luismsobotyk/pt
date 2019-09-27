@extends('layouts.app')

@section('content')
    <style>
        .notifications td a{
            color: #111111;
        }
        .notifications td:hover{
            background-color: #bdbdbd;
        }
    </style>
    <div class="container" style="margin-top: 7rem;">

        <table class="notifications">
            <tbody>
            <tr>
                <td><a href="#">Notificação A</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação B</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação C</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação D</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação E</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação F</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação G</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação H</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação I</a></td>
            </tr>
            <tr>
                <td><a href="#">Notificação J</a></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection