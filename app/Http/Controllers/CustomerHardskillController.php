<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerHardskillRequest;
use App\Http\Requests\UpdateCustomerHardskillRequest;
use App\Models\CustomerHardskill;

class CustomerHardskillController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerHardskillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerHardskillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerHardskill  $customerHardskill
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerHardskill $customerHardskill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerHardskill  $customerHardskill
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerHardskill $customerHardskill)
    {
        return view('customers.customer_hardskills.edit', compact('customerHardskill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerHardskillRequest  $request
     * @param  \App\Models\CustomerHardskill  $customerHardskill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerHardskillRequest $request, CustomerHardskill $customerHardskill)
    {
        $customerHardskill->update($request->validated());
        return redirect()->route('cv.hardSkillsEdit', $customerHardskill->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerHardskill  $customerHardskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerHardskill $customerHardskill)
    {
        $customerHardskill->delete();
        return redirect()->route('cv.hardSkillEdit', $customerHardskill->customer)->with('success', 'Deletion successful');
    }
}
