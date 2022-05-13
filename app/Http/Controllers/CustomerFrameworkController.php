<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerFrameworkRequest;
use App\Http\Requests\UpdateCustomerFrameworkRequest;
use App\Models\CustomerFramework;

class CustomerFrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerFrameworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerFrameworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerFramework  $customerFramework
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerFramework $customerFramework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerFramework  $customerFramework
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerFramework $customerFramework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerFrameworkRequest  $request
     * @param  \App\Models\CustomerFramework  $customerFramework
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerFrameworkRequest $request, CustomerFramework $customerFramework)
    {
        $customerFramework->update($request->validated());
        return redirect()->route('cv.frameworksEdit', $customerFramework->customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerFramework  $customerFramework
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerFramework $customerFramework)
    {
        //
    }
}
