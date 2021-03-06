<?php

namespace App\Observers;

use App\Events\NewCustomerHasRegisteredEvent;
use App\Models\Customer;
use Illuminate\Support\Facades\URL;
use App\Models\Cv;

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
        $customer->cv()->create(['link'=> $link]);
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
