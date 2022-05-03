<?php

namespace App\Observers;

use App\Events\NewCustomerHasRegisteredEvent;
use App\Models\Customer;
use App\Notifications\CustomerConfirmNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;

class CustomerObserver
{
    /**
     * Handle the Customer "created" event.
     *
     * @param Customer $customer
     * @return void
     */
    public function created(Customer $customer)
    {
        event(new NewCustomerHasRegisteredEvent($customer));
        $link = URL::signedRoute('cvLink', $customer);
     
    }

    /**
     * Handle the Customer "updated" event.
     *
     * @param Customer $customer
     * @return void
     */
    public function updated(Customer $customer)
    {
    }

    /**
     * Handle the Customer "deleted" event.
     *
     * @param Customer $customer
     * @return void
     */
    public function deleted(Customer $customer)
    {
    }

    /**
     * Handle the Customer "restored" event.
     *
     * @param Customer $customer
     * @return void
     */
    public function restored(Customer $customer)
    {
    }

    /**
     * Handle the Customer "force deleted" event.
     *
     * @param Customer $customer
     * @return void
     */
    public function forceDeleted(Customer $customer)
    {
    }
}
