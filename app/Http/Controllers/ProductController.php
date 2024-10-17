<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
    
}
