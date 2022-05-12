<?php

namespace App\Http\Controllers;

use App\Models\CustomerProgrammingLanguage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerProgrammingLanguageRequest;
use App\Http\Requests\UpdateCustomerProgrammingLanguageRequest;
use Illuminate\Http\Response;

class CustomerProgrammingLanguageController extends Controller
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
     * @param StoreCustomerProgrammingLanguageRequest $request
     * @return Response
     */
    public function store(StoreCustomerProgrammingLanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerProgrammingLanguage $customerProgrammingLanguage
     * @return Response
     */
    public function show(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerProgrammingLanguage $customerProgrammingLanguage
     * @return Response
     */
    public function edit(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerProgrammingLanguageRequest $request
     * @param CustomerProgrammingLanguage $customerProgrammingLanguage
     * @return Response
     */
    public function update(UpdateCustomerProgrammingLanguageRequest $request, CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        $customerProgrammingLanguage->update($request->validated());
        return redirect()->route('cv.programmingLanguagesEdit', $customerProgrammingLanguage->customer)->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerProgrammingLanguage $customerProgrammingLanguage
     * @return Response
     */
    public function destroy(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }
}
