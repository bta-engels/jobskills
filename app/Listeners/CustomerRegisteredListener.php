<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Notifications\CustomerRegisteredNotify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class CustomerRegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CustomerRegistered $event)
    {
        Notification::send($event->customer->email, new CustomerRegisteredNotify($event->customer));
    }
}
