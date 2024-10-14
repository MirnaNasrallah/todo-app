<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        return response()->json($todo);
    }
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->completed = $request->completed;
        $todo->save();
        return response()->json($todo);
    }
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo_title = $todo->title;
        Todo::destroy($id);
        return response()->json(['message' => "Todo $todo_title deleted"]);
    }
}
