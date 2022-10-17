<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('guest.home')->with('products', $products);
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        $prodexcept = Product::where('id', '!=', $id)->get();
        return view('guest.shop-details')->with('product', $product)->with('prodexcept', $prodexcept);
    }
}
