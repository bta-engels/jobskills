<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerProjectRequest;
use App\Http\Requests\UpdateCustomerProjectRequest;
use App\Models\CustomerProject;
use Illuminate\Http\Response;

class CustomerProjectController extends Controller
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
     * @param StoreCustomerProjectRequest $request
     * @return Response
     */
    public function store(StoreCustomerProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerProject $customerProject
     * @return Response
     */
    public function show(CustomerProject $customerProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerProject $customerProject
     * @return Response
     */
    public function edit(CustomerProject $customerProject)
    {
        return view('customers.customer_projects.edit', compact('customerProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerProjectRequest $request
     * @param CustomerProject $customerProject
     * @return Response
     */
    public function update(UpdateCustomerProjectRequest $request, CustomerProject $customerProject)
    {
        $customerProject->update($request->validated());
        return redirect()
            ->route('cv.projectsEdit', $customerProject->customer)
            ->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerProject $customerProject
     * @return Response
     */
    public function destroy(CustomerProject $customerProject)
    {
        $customerProject->delete();
        return redirect()
            ->route('cv.projectsEdit', $customerProject->customer)
            ->with('success', 'Delete successful');
    }
}
