<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Http\Requests\LanguageRequest;

class AdminLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Language::paginate($this->paginationLimit);
        return view('admin.languages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LanguageRequest $request
     * @return Response
     */
    public function store(LanguageRequest $request)
    {
        Language::create($request->validated());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param Language $language
     * @return Response
     */
//    public function show(Language $language) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Language $language
     * @return Response
     */
    public function edit(Language $language)
    {
        return view('admin.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LanguageRequest $request
     * @param Language $language
     * @return Response
     */
    public function update(LanguageRequest $request, Language $language)
    {
        $language->update($request->validated());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Language $language
     * @return Response
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return $this->index();
    }
}
