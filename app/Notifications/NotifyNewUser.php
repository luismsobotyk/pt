<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyNewUser extends Notification implements ShouldQueue
{
    use Queueable;

    private $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
//        return ['mail'];
        return ['database', 'mail', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->subject("Um novo usuário se cadastrou no sistema!")
            ->markdown('vendor.markdown.novoUsuario', [
                'user' => $this->user,
                'director' => User::where('director', true)->first(),
                'url' => route('verUsuario', $this->user->id)
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'id' => $this->id,
            'read_at' => null,
            'notifiable_id' =>  User::where('director', true)->first()->id,
            'data' => [
                'user' => $this->user,
            ]
        ]);
    }

    public function toDatabase($notifiable)
    {
        return [
            'user' => $this->user,
        ];
    }
}