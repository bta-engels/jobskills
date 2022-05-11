<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerProgrammingLanguageRequest;
use App\Http\Requests\UpdateCustomerProgrammingLanguageRequest;
use App\Models\CustomerProgrammingLanguage;

class CustomerProgrammingLanguageController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerProgrammingLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerProgrammingLanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerProgrammingLanguage  $customerProgrammingLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerProgrammingLanguage  $customerProgrammingLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerProgrammingLanguageRequest  $request
     * @param  \App\Models\CustomerProgrammingLanguage  $customerProgrammingLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerProgrammingLanguageRequest $request, CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        $customerProgrammingLanguage->update($request->validated());
        return redirect()->route('cv.programmingLanguagesEdit', $customerProgrammingLanguage->customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerProgrammingLanguage  $customerProgrammingLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerProgrammingLanguage $customerProgrammingLanguage)
    {
        //
    }
}
