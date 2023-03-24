<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('cart.index', compact('carts'));
    }

    public function create()
    {
        return view('cart.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::find($validatedData['product_id']);

        $cart = new Cart();
        $cart->product_id = $product->id;
        $cart->quantity = $validatedData['quantity'];
        $cart->total_price = $product->price * $validatedData['quantity'];
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function show($id)
    {
        $cart = Cart::find($id);
        return view('cart.show', compact('cart'));
    }

    public function edit($id)
    {
        $cart = Cart::find($id);
        return view('cart.edit', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);

        $cart->product_id = $request->get('product_id');
        $cart->quantity = $request->get('quantity');
        $cart->total_price = $request->get('total_price');

        $cart->save();

        return redirect('/carts')->with('success', 'Cart has been updated');
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect('/carts')->with('success', 'Cart has been deleted');
    }
}
