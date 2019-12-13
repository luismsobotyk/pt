@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 7rem;">
        <table class="notifications">
            <tbody>
            @foreach($notifications as $notification)
                <tr>
                @switch($notification->type)
                    @case('App\Notifications\NotifyNewUser')
                        <td style="@if(is_null($notification->read_at)) font-weight: bold @endif">
                            <a href="{{route('verUsuario', $notification->data['user']['id'])}}">{{$notification->created_at->format('d/m/Y h:m')}} - Novo usuário cadastrado no sistema: {{$notification->data['user']['name']}}</a>
                        </td>
                        @break;
                    @default:
                        <td>tipo da notificação não identificado</td>
                @endswitch
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection