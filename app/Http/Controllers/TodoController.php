<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{

    private $response = [
        'data' => null,
        'error' => null,
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('done')->orderBy('created_at', 'desc')->get();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoRequest $request)
    {
        try {
            //probiere php code auszuführen
            $this->response['data'] = Todo::create($request->validated());
        } catch (\Exception $e) {
            //wenns schief läuft, dann hier fehlerbehandlung
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoRequest  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        try {
            //probiere php code auszuführen
            $todo->update($request->validated());
            $this->response['data'] = $todo->refresh();
        } catch (\Exception $e) {
            //wenns schief läuft, dann hier fehlerbehandlung
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        try {
            //probiere php code auszuführen
            $this->response['data'] = $todo;
            $todo->delete();
        } catch (\Exception $e) {
            //wenns schief läuft, dann hier fehlerbehandlung
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }
}
