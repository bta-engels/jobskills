<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerProjectRequest;
use App\Http\Requests\UpdateCustomerProjectRequest;
use App\Models\CustomerProject;

class CustomerProjectController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerProject  $customerProject
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerProject $customerProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerProject  $customerProject
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerProject $customerProject)
    {
        return view('customers.customer_projects.edit', compact('customerProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerProjectRequest  $request
     * @param  \App\Models\CustomerProject  $customerProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerProjectRequest $request, CustomerProject $customerProject)
    {
        $customerProject->update($request->validated());
        return redirect()->route('cv.projectsEdit', $customerProject->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerProject  $customerProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerProject $customerProject)
    {
        $customerProject->delete();
        return redirect()->route('cv.projectsEdit', $customerProject->customer)->with('success', 'Deletion successful');
    }
}
