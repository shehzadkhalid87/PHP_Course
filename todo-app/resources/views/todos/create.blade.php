@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Create Todo</h2>
        <form method="POST" action="{{ route('todos.store') }}">
            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-2" required>
            <textarea name="description" placeholder="Description" class="form-control mb-2"></textarea>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
