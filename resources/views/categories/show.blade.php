@extends('layouts.app')

@section('title', 'Show Category')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Show Category</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
            </form>
        </div>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
        </tbody>
    </table>
@endsection
