<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Cv;
use Illuminate\Http\Response;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @param StoreCvRequest $request
     * @return Response
     */
    public function store(StoreCvRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Cv $cv
     * @return Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cv $cv
     * @return Response
     */
    public function edit(Cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCvRequest $request
     * @param Cv $cv
     * @return Response
     */
    public function update(UpdateCvRequest $request, Cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cv $cv
     * @return Response
     */
    public function destroy(Cv $cv)
    {
        //
    }

    public function personalDataEdit(Cv $cv)
    {

    }

    public function personalDataStore(Cv $cv)
    {

    }

}
