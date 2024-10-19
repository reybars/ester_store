<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // Display a listing of products
        $products = Product::all();
        return view('product_view', compact('products'));
    }

    public function cart()
    {
        $cartItems = session()->get('cart', []);
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', compact('cartItems', 'total'));
    }
    
    public function addToCart(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->product,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        dd(session()->all());
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
