<?php

namespace Tests;

use App\Models\Customer;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var Collection
     */
    protected $routes;

    protected $customer = [
        'name'      => 'Paul Panther',
        'email'     => 'engels@f50.de',
        'password'  => 'password',
        'password_confirmation' => 'password',
    ];

    protected function setUp():void
    {
        parent::setUp();
        $this->routes = collect(Route::getRoutes()->getRoutesByName());
    }

    use CreatesApplication;

}
