@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cart Detail</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="product_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name"
                                    value="{{ $cart->product->name }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity"
                                    value="{{ $cart->quantity }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_price"
                                class="col-md-4 col-form-label text-md-right">{{ __('Total Price') }}</label>

                            <div class="col-md-6">
                                <input id="total_price" type="text" class="form-control" name="total_price"
                                    value="{{ $cart->total_price }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('carts.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
