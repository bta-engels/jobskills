<?php

namespace App\Http\Controllers;

use App\Events\NewCustomerHasRegisteredEvent;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Mail\WelcomeNewUserMail;
use App\Models\Customer;
use App\Notifications\CustomerConfirm;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use function PHPUnit\Framework\logicalAnd;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCustomerRequest $request
     * @return Response
     */
    public function store(StoreCustomerRequest $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param Customer $customer
     * @return Response
     */
    public function show(Customer $customer)
    {
        return view('customers.profile.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Customer $customer
     * @return Response
     */
    public function edit(Customer $customer)
    {
        $customer->password = null;
        return view('customers.profile.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerRequest $request
     * @param Customer $customer
     * @return Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return $this->show($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @return Response
     */
    public function destroy(Customer $customer)
    {
    }

    public function confirm(Request $request, Customer $customer )
    {
        if ($request->hasValidSignature())
        {
            $customer->update(['confirmed' => true ]);
            return redirect()->route('login');
        }
            return view('customers.resend', compact('customer'));
    }
    public function resend (Customer $customer)
    {
        Notification::send($customer, new CustomerConfirm($customer));
        return back()->with('success';__('Confirmation Mail successfull sent'))

    }
}
