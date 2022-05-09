<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FrameworkRequest;
use App\Http\Requests\LanguageRequest;
use App\Models\Framework;
use App\Models\Language;
use Dompdf\Frame;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class AdminFrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Framework::all();
        return view('admin.frameworks.index', ['frameworks'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.frameworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(FrameworkRequest $request)
    {
        FrameworkRequest::create($request->validated());
        return redirect('/frameworks')->with('success', 'Framework created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Framework $framework
     * @return Response
     */
    public function show($framework)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Framework $framework
     * @return Response
     */
    public function edit($framework)
    {
        $data = Framework::find($framework);
        return view('admin.frameworks.edit', ['framework'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Framework $framework
     * @return Response
     */
    public function update(LanguageRequest $request, Framework $framework)
    {

        //$data = $request->input();
        $framework->update($request->validated());
        return redirect('/frameworks')->with('success', 'Framework updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Framework $framework
     * @return Response
     */
    public function destroy(Framework $framework)
    {
        $framework->delete();
        return redirect('/frameworks')->with('success', 'Framework deleted successfully');
    }
}
