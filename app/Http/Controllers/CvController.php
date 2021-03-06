<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutMeRequest;
use App\Http\Requests\CustomerLanguageRequest;
use App\Http\Requests\PersonalDataRequest;
use App\Http\Requests\StoreCustomerEducationRequest;
use App\Http\Requests\StoreCustomerFrameworkRequest;
use App\Http\Requests\StoreCustomerHardSkillRequest;
use App\Http\Requests\StoreCustomerLanguageRequest;
use App\Http\Requests\StoreCustomerProgrammingLanguageRequest;
use App\Http\Requests\StoreCustomerProjectRequest;
use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Customer;
use App\Models\CustomerEducation;
use App\Models\CustomerHardSkill;
use App\Models\CustomerLanguage;
use App\Models\CustomerProject;
use App\Models\Cv;
use App\Models\Framework;
use App\Models\Language;
use App\Models\ProgrammingLanguage;
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
//        CustomerEducation::create($request->validated() + ['customer_id' => $customer->id]);
        $customer->educations()->create($request->validated());
        return redirect()->route('cv.educationEdit', $customer);
    }

    public function languagesEdit(Customer $customer)
    {
        $languages = Language::orderBy('name')->get()->keyBy('id')->map->name;
        return view('customers.cv.edit.languages', compact('customer','languages'));
    }

    public function languagesStore(StoreCustomerLanguageRequest $request, Customer $customer)
    {
        $validated = $request->validated();
        $customer->languages()->sync($validated['languages']);
        return redirect()->route('cv.languagesEdit', $customer);
    }

    public function programmingLanguagesEdit(Customer $customer)
    {
        $programmingLanguages = ProgrammingLanguage::orderBy('name')->get()->keyBy('id')->map->name;
        return view('customers.cv.edit.programmingLanguages', compact('customer','programmingLanguages'));
    }

    public function programmingLanguagesStore(StoreCustomerProgrammingLanguageRequest $request, Customer $customer)
    {
        $validated = $request->validated();
        $customer->programmingLanguages()->sync($validated['programmingLanguages']);
        return redirect()->route('cv.programmingLanguagesEdit', $customer);
    }

    public function frameworksEdit(Customer $customer)
    {
        $frameworks = Framework::orderBy('name')->get()->keyBy('id')->map->name;
        return view('customers.cv.edit.frameworks', compact('customer','frameworks'));
    }

    public function frameworksStore(StoreCustomerFrameworkRequest $request, Customer $customer)
    {
        $validated = $request->validated();
        $customer->frameworks()->sync($validated['frameworks']);
        return redirect()->route('cv.projectsEdit', $customer);
    }

    public function projectsEdit(Customer $customer)
    {
        $projects = CustomerProject::orderBy('from')->get();
        return view('customers.cv.edit.projects', compact('customer','projects'));
    }

    public function projectsStore(StoreCustomerProjectRequest $request, Customer $customer)
    {
        $customer->projects()->create($request->validated());
        return redirect()->route('cv.hardSkillsEdit', $customer);
    }

    public function hardSkillsEdit(Customer $customer)
    {
        $hardSkills = CustomerHardSkill::orderBy('name')->get();
        return view('customers.cv.edit.hardSkills', compact('customer','hardSkills'));
    }

    public function hardSkillsStore(StoreCustomerHardSkillRequest $request, Customer $customer)
    {
        $customer->hardSkills()->create($request->validated());
        return redirect()->route('cv.hardSkillsEdit', $customer);
    }
}
