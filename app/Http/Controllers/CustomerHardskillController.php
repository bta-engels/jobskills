<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerHardSkillRequest;
use App\Http\Requests\UpdateCustomerHardSkillRequest;
use App\Models\CustomerHardSkill;
use Illuminate\Http\Response;

class CustomerHardSkillController extends Controller
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
     * @param StoreCustomerHardSkillRequest $request
     * @return Response
     */
    public function store(StoreCustomerHardSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param CustomerHardSkill $customerHardSkill
     * @return Response
     */
    public function show(CustomerHardSkill $customerHardSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CustomerHardSkill $customerHardSkill
     * @return Response
     */
    public function edit(CustomerHardSkill $customerHardSkill)
    {
        return view('customers.customer_hard_skills.edit', compact('customerHardSkill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCustomerHardSkillRequest $request
     * @param CustomerHardSkill $customerHardSkill
     * @return Response
     */
    public function update(UpdateCustomerHardSkillRequest $request, CustomerHardSkill $customerHardSkill)
    {
        $customerHardSkill->update($request->validated());
        return redirect()
            ->route('cv.hardSkillsEdit', $customerHardSkill->customer)
            ->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerHardSkill $customerHardSkill
     * @return Response
     */
    public function destroy(CustomerHardSkill $customerHardSkill)
    {
        $customerHardSkill->delete();
        return redirect()
            ->route('cv.hardSkillsEdit', $customerHardSkill->customer)
            ->with('success', 'Delete successful');
    }
}
