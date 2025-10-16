@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Edit Todo</h2>
        <form method="POST" action="{{ route('todos.update', $todo->id) }}">
            @csrf @method('PUT')
            <input type="text" name="title" value="{{ $todo->title }}" class="form-control mb-2" required>
            <textarea name="description" class="form-control mb-2">{{ $todo->description }}</textarea>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
