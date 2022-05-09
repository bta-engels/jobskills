<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.languages.index',['languages'=>$data]);

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

    }

    /**
     * Display the specified resource.
     *
     * @param Language $language
     * @return Response
     */
    public function show($language)
    {

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
     * @param Request $request
     * @param Language $language
     * @return Response
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $language->update($request->all());
        dd($language);
        return $language;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Language $language
     * @return Response
     */
    public function destroy(Language $language)
    {
        //
    }
}
