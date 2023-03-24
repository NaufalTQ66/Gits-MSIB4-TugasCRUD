<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart');

        if (!$cartItems) {
            $cartItems = [];
        }

        return view('cart.index', compact('cartItems'));
    }

    public function store(Product $product)
    {
        $cartItems = session()->get('cart');

        if (!$cartItems) {
            $cartItems = [];
        }

        $cartItems[$product->id] = [
            'product' => $product,
            'quantity' => 1,
            'total' => $product->price
        ];

        session()->put('cart', $cartItems);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request, $id)
    {
        $cartItems = session()->get('cart');

        if (!$cartItems) {
            $cartItems = [];
        }

        $quantity = $request->quantity;
        $cartItems[$id]['quantity'] = $quantity;
        $cartItems[$id]['total'] = $quantity * $cartItems[$id]['product']->price;

        session()->put('cart', $cartItems);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $cartItems = session()->get('cart');

        if (isset($cartItems[$id])) {
            unset($cartItems[$id]);
            session()->put('cart', $cartItems);
        }

        return redirect()->back();
    }
}
