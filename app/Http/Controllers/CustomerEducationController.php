<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerEducationRequest;
use App\Http\Requests\UpdateCustomerEducationRequest;
use App\Models\CustomerEducation;
use Illuminate\Http\Response;

class CustomerEducationController extends Controller
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
     * @param StoreCustomerEducationRequest $request
     * @return Response
     */
    public function store(StoreCustomerEducationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerEducation $customerEducation
     * @return Response
     */
    public function show(CustomerEducation $customerEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerEducation $customerEducation
     * @return Response
     */
    public function edit(CustomerEducation $customerEducation)
    {
        return view('customers.customer_educations.edit', compact('customerEducation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerEducationRequest $request
     * @param CustomerEducation $customerEducation
     * @return Response
     */
    public function update(UpdateCustomerEducationRequest $request, CustomerEducation $customerEducation)
    {
        $customerEducation->update($request->validated());
        return redirect()->route('cv.educationEdit', $customerEducation->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerEducation $customerEducation
     * @return Response
     */
    public function destroy(CustomerEducation $customerEducation)
    {
        $customerEducation->delete();
        return redirect()->route('cv.educationEdit', $customerEducation->customer)->with('success', 'Deletion successful');
    }
}
