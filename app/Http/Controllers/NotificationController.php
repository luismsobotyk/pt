<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notificacoes(){
        $notifications = Auth::user()->notifications;
        return view('notificacoes')->with('notifications',$notifications);
    }

    public function json(Request $request){
        $notifications = Auth::user()->unreadNotifications;
        return response()->json(compact('notifications'));
    }

    public function markAsRead(Request $request){
        $notification = Auth::user()
            ->notifications()
            ->where('id', $request->id)
            ->first();
        if($notification)
            $notification->markAsRead();
    }

}
