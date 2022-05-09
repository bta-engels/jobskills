<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LanguagesRequest;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Language::all();
        return view('admin/languages/index', ['languages'=>$data]);
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
     * @param LanguagesRequest $request
     * @return Response
     */
    public function store(LanguagesRequest $request)
    {
        Language::create($request->validated());
        return redirect('/languages')->with('success', 'Language created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Language $language
     * @return Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Language $language
     * @return Response
     */
    public function edit($language)
    {
        $data = Language::find($language);
        return view('admin.languages.edit', ['language'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LanguagesRequest $request
     * @param Language $language
     * @return Response
     */
    public function update(LanguagesRequest $request, Language $language)
    {
        $language->update($request->validated());
        return redirect('/languages')->with('success', 'Language updated successfully');
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
        return redirect('/languages')->with('success', 'Language deleted successfully');

    }
}
