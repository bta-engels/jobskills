<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Models\User;
use App\Notifications\AdminCustomerRegisteredNotify;
use App\Notifications\CustomerRegisteredNotify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class AdminCustomerRegisteredListener
{
    private $users;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = User::all(['email']);
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CustomerRegistered $event)
    {
        Notification::send($this->users, new AdminCustomerRegisteredNotify($event->customer));

    }
}
