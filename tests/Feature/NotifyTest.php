<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Notifications\Notificacoes;

class NotifyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSend()
    {
//        Route::get('/notify', function(){
//            Auth::user()->notify(new \App\Notifications\StatusLiked('Someone'));
//            // Notification::send(Auth::user(), new \App\Notifications\StatusLiked('Someone'));
//            return "Notification has been sent!";
//        });
        $user_dti = User::find(3);
        $user_dti->notify(new Notificacoes("Bem vindo!"));
        var_dump($user_dti->notifications[0]->mensagem);
//        $this->assertEquals('Bem vindo!', $user_dti->notifications[0]->data->mensagem);
    }
}
