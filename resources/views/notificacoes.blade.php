@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 7rem;">
        <table class="notifications">
            <tbody>
            @if(!$notifications)

            @else
                @foreach($notifications as $notification)
                    <tr>
                        @switch($notification->type)
                            @case('App\Notifications\NotifyNewUser')
                            <td>
                                <b>{{$notification->created_at->format('d/m/Y h:m')}}</b> - {{$notification->data['user']['name']}} se cadastrou no sistema!
                                <a href="{{route('markAsRead', $notification->id)}}" class="waves-effect waves-light btn-small" style="float: right; margin-left: 15px"><i class="material-icons left">done</i> Lida</a>
                                <a href="{{route('editarPermissao', $notification->data['user']['id'])}}" class="waves-effect waves-light btn-small" style="float: right"><i class="material-icons left">edit</i> Editar Permissões</a>
                            </td>
                            @break;
                            @default:
                            <td>tipo da notificação não identificado</td>
                        @endswitch
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection
