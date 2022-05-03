<?php

namespace App\Providers;

use App\Events\NewCustomerCreatedEvent;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Listeners\NewCustomerCreatedListener;
use App\Listeners\WelcomeNewCustomerListener;
use App\Models\Customer;
use App\Observers\CustomerObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        NewCustomerHasRegisteredEvent::class => [
            WelcomeNewCustomerListener::class,
            NewCustomerCreatedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Customer::observe(CustomerObserver::class);

    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
