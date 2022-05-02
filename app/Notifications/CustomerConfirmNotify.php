<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;

class CustomerConfirmNotify extends CustomerNotify
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->level('success')
            ->line('Dear ' .$this->customer->name.', your registration is confirmed')
            ->action('Please login via ', route('login'))
            ->line('Best regards your jobskills team!')
        ;
    }
}
