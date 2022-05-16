<?php

namespace Tests;

use App\Models\Customer;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $customer = [
        'name'      => 'Paul Panther',
        'email'     => 'engels@f50.de',
        'password'  => 'password',
        'password_confirmation' => 'password',
    ];
}
