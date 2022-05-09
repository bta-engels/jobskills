<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        ProgrammingLanguage::create($data);
        return redirect('/programming_languages')->with('success', 'Programming Language created successfully');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function edit($programmingLanguage)
    {
        $data = ProgrammingLanguage::find($programmingLanguage);
        return view('admin.programming_languages.edit', ['programmingLanguage'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function update(Request $request, ProgrammingLanguage $programmingLanguage)
    {
        $data = $request->input();
        $programmingLanguage->update($data);
        return redirect('/programming_languages')->with('success', 'Programming Language updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function destroy($programmingLanguage)
    {
        $data = ProgrammingLanguage::findOrFail($programmingLanguage);
        $data->delete();
        return redirect('/programming_languages')->with('success', 'Programming Language deleted successfully');
    }
}
