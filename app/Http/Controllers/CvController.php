<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutMeRequest;
use App\Http\Requests\CustomerLanguageRequest;
use App\Http\Requests\PersonalDataRequest;
use App\Http\Requests\StoreCustomerEducationRequest;
use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Customer;
use App\Models\CustomerEducation;
use App\Models\CustomerLanguage;
use App\Models\Cv;
use App\Models\Language;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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

    public function personalDataEdit(Customer $customer)
    {
        return view('customers.cv.edit.personalData', compact('customer'));

    }

    public function personalDataStore(PersonalDataRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('cv.aboutMeEdit', $customer);
    }

    public function aboutMeEdit(Customer $customer)
    {
        return view('customers.cv.edit.aboutMe', compact('customer'));

    }

    public function aboutMeStore(AboutMeRequest $request, Customer $customer)
    {
        $validated = $request->validated();

        $file = $request->file('img');
        if($file) {
            $imgName = $file->hashName();
            Storage::disk('image')->putFileAs('', $file, $imgName);
            $validated['img'] = $imgName;
        }
        $customer->update($validated);
        return redirect()->route('cv.educationEdit', $customer);
    }

    public function educationEdit(Customer $customer)
    {
        $educations = CustomerEducation::orderBy('from')->get();
        return view('customers.cv.edit.education', compact('customer','educations'));
    }

    public function educationStore(StoreCustomerEducationRequest $request, Customer $customer)
    {
        $customer->educations()->create($request->validated());
        return redirect()->route('cv.educationEdit', $customer);
    }

    public function languagesEdit(Customer $customer)
    {
        $languages = Language::orderBy('name')->get();
        return view('customers.cv.edit.languages', compact('customer','languages'));
    }

    public function languagesStore(CustomerLanguageRequest $request, Customer $customer)
    {
        
    }

}
