<?php

namespace App\Listeners;


use App\Mail\WelcomeNewCustomerMail;
use App\Notifications\CustomerConfirm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class WelcomeNewCustomerListener
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
    public function handle($event)
    {
    //    Mail::to($event->customer->email)->send(new WelcomeNewCustomerMail($event->customer));
        Notification::send($event->customer, new CustomerConfirm($event->customer));
    }
}
