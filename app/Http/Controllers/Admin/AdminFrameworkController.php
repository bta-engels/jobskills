<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FrameworksRequest;
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
    public function store(FrameworksRequest $request)
    {
        Framework::create($request->validated());
        return redirect('/frameworks')->with('success', 'Framework created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Framework $framework
     * @return Response
     */
    public function edit(Framework $framework)
    {
        return view('admin.frameworks.edit', compact('framework'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Framework $framework
     * @return Response
     */
    public function update(FrameworksRequest $request, Framework $framework)
    {
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
