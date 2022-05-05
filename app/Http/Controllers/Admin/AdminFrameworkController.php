<?php

namespace App\Http\Controllers\Admin;

use App\Models\Framework;
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
        return view('admin/frameworks/index', ['frameworks'=>$data]);
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
     * @param Framework $framework
     * @return Response
     */
    public function show(Framework $framework)
    {
        $data = Framework::find($framework);
        return view('admin/frameworks/edit', ['framework'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Framework $framework
     * @return Response
     */
    public function edit(Framework $framework)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Framework $framework
     * @return Response
     */
    public function update(Request $request, Framework $framework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Framework $framework
     * @return Response
     */
    public function destroy(Framework $framework)
    {
        //
    }
}
