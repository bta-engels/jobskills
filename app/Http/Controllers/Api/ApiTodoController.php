<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiStoreTodoRequest;
use App\Http\Requests\Api\ApiUpdateTodoRequest;
use Illuminate\Http\Response;

class ApiTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $todos = Todo::orderBy('done')
            ->orderBy('created_at','desc')
            ->get()
        ;
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ApiStoreTodoRequest  $request
     * @return Response
     */
    public function store(ApiStoreTodoRequest $request)
    {
        $todo = Todo::create($request->validated());
        return response()->json($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ApiUpdateTodoRequest  $request
     * @param Todo $todo
     * @return Response
     */
    public function update(ApiUpdateTodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return response()->json($todo->refresh());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json($todo);
    }
}
