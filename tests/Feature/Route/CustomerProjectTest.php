<?php

namespace Tests\Feature\Route;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerProjectTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_project_form()
    {
        $customer = Customer::all()->first();
        $response = $this
            ->actingAs($customer, 'customer')
            ->get(route('cv.projectsEdit', $customer))
        ;
        $response->assertStatus(200);
    }
}
