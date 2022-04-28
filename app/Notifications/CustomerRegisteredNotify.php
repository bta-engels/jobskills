<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;

class CustomerRegisteredNotify extends CustomerNotify
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
            ->line('Thanks for your registration '. $this->customer->name)
            ->action('Notification Action', url('/'))
            ->line('Please wait for confirmation of your registration!')
        ;
    }
}
