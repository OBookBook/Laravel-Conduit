<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        Todo::create([
            'title' => $request->title,
        ]);

        return $this->index();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();
        return $this->index();
    }

    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/todos');
    }
}
