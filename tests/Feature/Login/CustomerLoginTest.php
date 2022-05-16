<?php

namespace Tests\Feature\Notifications;

use Tests\TestCase;
use App\Models\Customer;

class CustomerLoginTest extends TestCase
{
    public function test_invalid_login()
    {
        $wrongLogin = [
            'email'     => 'wrong@mail',
            'password'  => 'wrongpassword',
        ];
        echo __FUNCTION__;
        $customer = Customer::whereEmail('wrong@mail')->first();
        $this->assertTrue(null === $customer);
        $this->assertInvalidCredentials($wrongLogin, 'customer');
    }
}
