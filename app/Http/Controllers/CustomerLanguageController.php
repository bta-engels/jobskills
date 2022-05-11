<?php

namespace App\Http\Controllers;

use App\Models\CustomerLanguage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerLanguageRequest;
use App\Http\Requests\UpdateCustomerLanguageRequest;

class CustomerLanguageController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerLanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerLanguage  $customerLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerLanguage  $customerLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerLanguageRequest  $request
     * @param  \App\Models\CustomerLanguage  $customerLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerLanguageRequest $request, CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerLanguage  $customerLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerLanguage $customerLanguage)
    {
        //
    }
}
