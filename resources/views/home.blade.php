@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to our Laptop Shop!</h1>
        <p class="lead">Kami menjual berbagai jenis laptop, antara lain Macbook, gaming, dan laptop mainstream.</p>
        <hr class="my-4">
        <p>Explore koleksi kami dan temukan laptop yang sempurna untuk kebutuhan Anda.</p>
        <a class="btn btn-primary btn-lg" href="/products" role="button">Browse products</a>
    </div>
@endsection
