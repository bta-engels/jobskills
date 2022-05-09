<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutMeRequest;
use App\Http\Requests\PersonalDataRequest;
use App\Http\Requests\StoreCustomerEducationRequest;
use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Customer;
use App\Models\Cv;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CvController extends Controller
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
     * @param StoreCvRequest $request
     * @return Response
     */
    public function store(StoreCvRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Cv $cv
     * @return Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cv $cv
     * @return Response
     */
    public function edit(Cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCvRequest $request
     * @param Cv $cv
     * @return Response
     */
    public function update(UpdateCvRequest $request, Cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cv $cv
     * @return Response
     */
    public function destroy(Cv $cv)
    {
        //
    }

    /**
     * @param Customer $customer
     * @return Application|Factory|View
     */
    public function personalDataEdit(Customer $customer)
    {
        return view('customers.cv.edit.personalData', compact('customer'));

    }

    /**
     * @param PersonalDataRequest $request
     * @param Customer $customer
     * @return RedirectResponse
     */
    public function personalDataStore(PersonalDataRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('cv.aboutMeEdit', $customer);
    }

    /**
     * @param Customer $customer
     * @return Application|Factory|View
     */
    public function aboutMeEdit(Customer $customer)
    {
        return view('customers.cv.edit.aboutMe', compact('customer'));

    }

    /**
     * @param AboutMeRequest $request
     * @param Customer $customer
     * @return void
     */
    public function aboutMeStore(AboutMeRequest $request, Customer $customer)
    {
        $validated = $request->validated();
        $file = $request->file('img');
        if($file) {
            $imgName = $file->hashName();
            $file->storeAs('', $imgName, ['disk' => 'image']);
            $validated['img'] = $imgName;
        }
        $customer->update($validated);
    }


    /**
     * @param Customer $customer
     * @return Application|Factory|View
     */
    public function educationEdit(Customer $customer)
    {
        return view('customers.cv.edit.education', compact('customer'));

    }

    public function educationStore(StoreCustomerEducationRequest $request, Customer $customer)
    {
        $customer->educations()->create($request->validated());
        return redirect()->route('cv.aboutMeEdit', $customer);
    }

}
