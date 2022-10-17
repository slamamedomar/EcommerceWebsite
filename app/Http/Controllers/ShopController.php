<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('guest.shop')->with('products', $products)->with('categories', $categories);
    }
    public function shopByCat($idcategory)
    {   //::find($idcategory) withcat
        $categories = Category::all();
        $cat =  Category::find($idcategory);
        $products = $cat->products;
        return view('guest.shop')->with('products', $products)->with('categories', $categories);
    }

    public function searchP(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keywords . '%')->get();
        $categories = Category::all();
        return view('guest.shop')->with('products', $products)->with('categories', $categories);
    }
}
