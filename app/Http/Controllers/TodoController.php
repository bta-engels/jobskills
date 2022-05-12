<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Exception;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    private $response = [
        'data' => null,
        'error' => null,
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $todos = Todo::orderBy('done')->orderBy('created_at','desc')->get();
        return response()->json($todos);

    }

    /**
     * Display the specified resource.
     *
     * @param Todo $todo
     * @return Response
     */
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTodoRequest $request
     * @return Response
     */
    public function store(StoreTodoRequest $request)
    {
        try{
            //probiere php code
            $this->response['data'] = Todo::create($request->validated());
        } catch (Exception $e) {
            //wenns schief läuft
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTodoRequest $request
     * @param Todo $todo
     * @return Response
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        try{
            //probiere php code
            $todo->update($request->validated());
            $this->response['data'] = $todo->refresh();
        } catch (Exception $e) {
            //wenns schief läuft
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        try{
            //probiere php code
            $this->response['data'] = $todo;
            $todo->delete();
        } catch (Exception $e) {
            //wenns schief läuft
            $this->response['error'] = $e->getMessage();
        }
        return response()->json($this->response);
    }
}
