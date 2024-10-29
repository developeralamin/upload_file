<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Support\Facades\Log;

class SendMailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $user;

    public function __construct($user)
    {
        $this->user = $user; // Store the product code (email)
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        Log::info("message");
        Log::info($this->user);
        return (new MailMessage)
                    ->subject('Important Notification')
                    ->line('This email is sent to: ' . $this->user)
                    ->action('Visit Us', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
