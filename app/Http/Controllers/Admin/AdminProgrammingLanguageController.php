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
        return view('admin/programming_languages/index', ['programmingLanguages'=>$data]);
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function show(ProgrammingLanguage $programmingLanguage)
    {
        $data = ProgrammingLanguage::find($programmingLanguage);
        return view('admin/programming_languages/edit', ['programmingLanguage'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function edit(ProgrammingLanguage $programmingLanguage)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function destroy(ProgrammingLanguage $programmingLanguage)
    {
        //
    }
}
