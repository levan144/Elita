<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Broadcasting\PrivateChannel;

class MyNotification extends Notification
{
    use Queueable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable) {
        return ['broadcast', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('This is the notification line.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toBroadcast($notifiable)
    {
        return [
            'message' => $this->data
        ];
    }

    public function broadcastOn()
    {
        return new PrivateChannel('App.Models.User.' . $this->data['user_id']);
    }
}
