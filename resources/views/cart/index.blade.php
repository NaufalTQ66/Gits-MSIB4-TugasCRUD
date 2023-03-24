@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Cart</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Continue Shopping</a>
        </div>
    </div>
    @if (isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($item['total_price'], 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-right font-weight-bold">Total Price:</td>
                    <td colspan="2">Rp{{ number_format($total_price, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
