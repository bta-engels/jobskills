<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerLanguageRequest;
use App\Http\Requests\UpdateCustomerLanguageRequest;
use App\Models\CustomerLanguage;
use Illuminate\Http\Response;

class CustomerLanguageController extends Controller
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
     * @param StoreCustomerLanguageRequest $request
     * @return Response
     */
    public function store(StoreCustomerLanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerLanguage $customerLanguage
     * @return Response
     */
    public function show(CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerLanguage $customerLanguage
     * @return Response
     */
    public function edit(CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerLanguageRequest $request
     * @param CustomerLanguage $customerLanguage
     * @return Response
     */
    public function update(UpdateCustomerLanguageRequest $request, CustomerLanguage $customerLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerLanguage $customerLanguage
     * @return Response
     */
    public function destroy(CustomerLanguage $customerLanguage)
    {
        //
    }
}
