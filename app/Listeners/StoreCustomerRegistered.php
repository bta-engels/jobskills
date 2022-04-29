<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Mail\WelcomeNewCustomerMail;
use Carbon\Language;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class StoreCustomerRegistered
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
     * @param CustomerRegistered $event
     * @return void
     */
    public function handle(CustomerRegistered $event)
    {
        //Mail::to($event->customer->email)->send(new WelcomeNewCustomerMail());
        Mail::to($event->user->email)->send(new WelcomeNewCustomerMail());

    }
}
