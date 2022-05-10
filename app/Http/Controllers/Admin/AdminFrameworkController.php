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
        $data = Framework::paginate($this->paginationLimit);
        return view('admin.frameworks.index', compact('data'));
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
     * @param FrameworkRequest $request
     * @return Response
     */
    public function store(FrameworkRequest $request)
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
     * @param FrameworkRequest $request
     * @param Framework $framework
     * @return Response
     */
    public function update(FrameworkRequest $request, Framework $framework)
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
