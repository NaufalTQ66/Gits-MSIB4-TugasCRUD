@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to our Laptop Shop!</h1>
        <p class="lead">We sell various types of laptops, including Macbook, gaming, and mainstream laptops.</p>
        <hr class="my-4">
        <p>Explore our collections and find the perfect laptop for your needs.</p>
        <a class="btn btn-primary btn-lg" href="/products" role="button">Browse products</a>
    </div>
@endsection
