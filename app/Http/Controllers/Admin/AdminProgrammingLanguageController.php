<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ProgrammingLanguage;
use App\Http\Requests\ProgrammingLanguageRequest;

class AdminProgrammingLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = ProgrammingLanguage::paginate($this->paginationLimit);
        return view('admin.programmingLanguages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.programmingLanguages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProgrammingLanguageRequest $request
     * @return Response
     */
    public function store(ProgrammingLanguageRequest $request)
    {
        ProgrammingLanguage::create($request->validated());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
//    public function show(ProgrammingLanguage $programmingLanguage) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function edit(ProgrammingLanguage $programmingLanguage)
    {
        return view('admin.programmingLanguages.edit', compact('programmingLanguage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProgrammingLanguageRequest $request
     * @param ProgrammingLanguage $programmingLanguage
     * @return Response
     */
    public function update(ProgrammingLanguageRequest $request, ProgrammingLanguage $programmingLanguage)
    {
        $programmingLanguage->update($request->validated());
        return $this->index();
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
        return $this->index();
    }
}
