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
            ->line('Dear ' .$this->customer->name.', please confirm your registration here')
            ->action('confirm', route('login'))
            ->line('Best regards your jobskills team!')
        ;
    }
}
