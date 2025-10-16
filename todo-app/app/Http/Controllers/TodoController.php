<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        // ✅ Pass $todos to the view
        return view('todos.index', compact('todos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth::id(),
        ]);
        return redirect()->route('todos.index')->with('success', 'Todo created');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('todos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {

        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
        $request->validate(['title' => 'required']);
        $todo->update($request->only(['title', 'description', 'is_completed']));
        return redirect()->route('todos.index')->with('success', 'Todo updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Todo deleted!');
    }
}
