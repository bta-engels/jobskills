<?php

namespace App\Notifications;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminCustomerRegisteredNotify extends CustomerNotify
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
            ->line('A new customer has registerd: '. $this->customer->name)
            ->action('Notification Action', url('/'))
            ->line('customer Email: ' . $this->customer->email)
        ;
    }
}
