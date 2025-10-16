@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Your Todos</h2>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Add Todo</a>

        @foreach($todos as $todo)
            <div class="card mb-2 p-3">
                <h4>{{ $todo->title }}</h4>
                <p>{{ $todo->description }}</p>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
