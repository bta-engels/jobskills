<?php

namespace App\Listeners;


use App\Mail\NewRegisteredCustomerMaill;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewCustomerCreatedListener
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
    public function handle($event)
    {
        Mail::to($this->users)->send(new NewRegisteredCustomerMaill($event->customer));
    }
}
