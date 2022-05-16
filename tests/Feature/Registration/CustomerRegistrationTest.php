<?php

namespace Tests\Feature\Notifications;

use Illuminate\Support\Str;
use Tests\TestCase;
use App\Models\Customer;

class CustomerRegistrationTest extends TestCase
{
    public const ROUTE_RREGISTER_REQUEST = 'register';
    public const ROUTE_RREGISTER_SUBMIT = 'register';

    protected function setUp():void
    {
        parent::setUp();
        $customer = Customer::whereEmail($this->customer['email'])->first();
        if($customer) {
            $customer->delete();
        }
    }

    protected function tearDown():void
    {
        $customer = Customer::whereEmail($this->customer['email'])->first();
        if($customer) {
            $customer->delete();
        }
        parent::tearDown();
    }


    public function test_invalid_name_register()
    {
        echo __FUNCTION__;
        $this->customer['name'] = '';
        $this
            ->followingRedirects()
            ->from(route(self::ROUTE_RREGISTER_REQUEST))
            ->post(route(self::ROUTE_RREGISTER_SUBMIT, $this->customer), $this->customer)
            ->assertSuccessful()
            ->assertSeeText(__('The name field is required.'));
    }

    public function test_invalid_password_register()
    {
        echo __FUNCTION__;
        $this->customer['password'] = '';
        $this
            ->followingRedirects()
            ->from(route(self::ROUTE_RREGISTER_REQUEST))
            ->post(route(self::ROUTE_RREGISTER_SUBMIT, $this->customer), $this->customer)
            ->assertSuccessful()
            ->assertSeeText(__('The password field is required.'));
    }

    public function test_invalid_password_confirmed_register()
    {
        echo __FUNCTION__;
        $this->customer['password_confirmation'] = 'passwort';
        $this
            ->followingRedirects()
            ->from(route(self::ROUTE_RREGISTER_REQUEST))
            ->post(route(self::ROUTE_RREGISTER_SUBMIT, $this->customer), $this->customer)
            ->assertSuccessful()
            ->assertSeeText(__('The password confirmation does not match.'));
    }

    public function test_valid_register()
    {
        echo __FUNCTION__;
        $response = $this->post(route('register', $this->customer), $this->customer);
        $response->assertRedirect('');
        $customer = Customer::whereEmail($this->customer['email'])->first();
        $this->assertTrue(null !== $customer);
    }
}
