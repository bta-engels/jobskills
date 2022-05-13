<?php

namespace App\Http\Controllers;

use App\Models\CustomerFramework;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerFrameworkRequest;
use App\Http\Requests\UpdateCustomerFrameworkRequest;
use Illuminate\Http\Response;

class CustomerFrameworkController extends Controller
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
     * @param StoreCustomerFrameworkRequest $request
     * @return Response
     */
    public function store(StoreCustomerFrameworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerFramework $customerFramework
     * @return Response
     */
    public function show(CustomerFramework $customerFramework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerFramework $customerFramework
     * @return Response
     */
    public function edit(CustomerFramework $customerFramework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerFrameworkRequest $request
     * @param CustomerFramework $customerFramework
     * @return Response
     */
    public function update(UpdateCustomerFrameworkRequest $request, CustomerFramework $customerFramework)
    {
        $customerFramework->update($request->validated());
        return redirect()->route('cv.frameworksEdit', $customerFramework->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerFramework $customerFramework
     * @return Response
     */
    public function destroy(CustomerFramework $customerFramework)
    {
        //
    }
}
