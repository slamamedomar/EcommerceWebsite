<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('admin.products.index')->with('products', $products)->with('categories', $categories);
    }
    public function add(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]
        );

        $prod = new Product();
        $prod->name = $request->name;
        $prod->category_id = $request->cat;
        $prod->description = $request->description;
        $prod->price = $request->price;
        $prod->quantity = $request->quantity;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $prod->image = $imageName;


        if ($prod->save()) {
            return redirect()->back();
        } else {
            return 'erreur d\'ajout';
        }
    }

    public function delete($id)
    {
        $prod = Product::find($id);
        $file_path = public_path('uploads/') . $prod->image;
        unlink($file_path);
        if ($prod->delete()) {

            return redirect('/admin/products')->with('msg', 'prod deleted');
        } else {
            return 'erreur de supp';
        }
    }
    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'quantity' => 'required',
            ]
        );
        $id = $request->id_prod;
        $prod = Product::find($id);
        $prod->name = $request->name;
        $prod->description = $request->description;
        $prod->price = $request->price;
        $prod->quantity = $request->quantity;

        if ($img = $request->image) {   //delete old img
            $file_path = public_path('uploads\\') . $prod->image;
            unlink($file_path);
            //add new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $prod->image = $imageName;
        }


        if ($prod->update()) {
            return redirect()->back();
        } else {
            return 'erreur de modification';
        }
    }
}
