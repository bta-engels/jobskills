<?php

namespace Tests\Feature\Notifications;

use App\Models\Customer;
use Database\Factories\CustomerFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Request;
use Tests\TestCase;

class CustomerRegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        echo __FUNCTION__;
        $customer = Customer::whereEmail($this->customer['email'])->first();
        if($customer) {
            $customer->delete();
        }
        $response = $this->post(route('register', $this->customer), $this->customer);
        $response->assertRedirect('');
        $customer = Customer::whereEmail($this->customer['email'])->first();
        $this->assertTrue(null !== $customer);
        $customer->confirmed = true;
        $customer->save();
    }

    public function test_login()
    {
        echo __FUNCTION__;
        $customer = Customer::whereEmail($this->customer['email'])->first();
        $this->assertTrue(null !== $customer);
        $response = $this
            ->actingAs($customer, 'customer')
            ->get(route('customers.show', $customer))
        ;
        $response->assertSee($customer->name);
        $this->assertAuthenticated('customer');
    }
}
