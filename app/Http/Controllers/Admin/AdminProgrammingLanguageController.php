<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgrammingLanguagesRequest;
use App\Models\ProgrammingLanguage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminProgrammingLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = ProgrammingLanguage::all();
        return view('admin.programming_languages.index', ['programmingLanguages'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.programming_languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(ProgrammingLanguagesRequest $request)
    {
        ProgrammingLanguage::create($request->validated());
        return redirect('/programming_languages')->with('success', 'Programming Language created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function edit(ProgrammingLanguage $programmingLanguage)
    {
        return view('admin.programming_languages.edit', compact('programmingLanguage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function update(ProgrammingLanguagesRequest $request, ProgrammingLanguage $programmingLanguage)
    {
        $programmingLanguage->update($request->validated());
        return redirect('/programming_languages')->with('success', 'Programming Language updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function destroy(ProgrammingLanguage $programmingLanguage)
    {
        $programmingLanguage->delete();
        return redirect('/programming_languages')->with('success', 'Programming Language deleted successfully');
    }
}
