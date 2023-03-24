@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Edit Product</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ old('name', $product->name) }}">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"{{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                value="{{ old('description', $product->description) }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control"
                value="{{ old('price', $product->price) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
