<?php

namespace App\Http\Controllers;

use App\Models\CustomerHardskill;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerHardskillRequest;
use App\Http\Requests\UpdateCustomerHardskillRequest;
use Illuminate\Http\Response;

class CustomerHardskillController extends Controller
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
     * @param StoreCustomerHardskillRequest $request
     * @return Response
     */
    public function store(StoreCustomerHardskillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerHardskill $customerHardskill
     * @return Response
     */
    public function show(CustomerHardskill $customerHardskill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerHardskill $customerHardskill
     * @return Response
     */
    public function edit(CustomerHardskill $customerHardskill)
    {
        return view('customers.customer_hardskills.edit', compact('customerHardskill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerHardskillRequest $request
     * @param CustomerHardskill $customerHardskill
     * @return Response
     */
    public function update(UpdateCustomerHardskillRequest $request, CustomerHardskill $customerHardskill)
    {
        $customerHardskill->update($request->validated());
        return redirect()->route('cv.hardSkillsEdit', $customerHardskill->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerHardskill $customerHardskill
     * @return Response
     */
    public function destroy(CustomerHardskill $customerHardskill)
    {
        $customerHardskill->delete();
        return redirect()->route('cv.hardSkillsEdit', $customerHardskill->customer)->with('success', 'Deletion successful');
    }
}
