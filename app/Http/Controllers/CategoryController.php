<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index')->with('categories', $categories);
    }
    public function AddCategory(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required'
            ]
        );

        $cat = new Category();
        $cat->name = $request->name;
        $cat->description = $request->description;

        if ($cat->save()) {
            return redirect()->back()->with("success", "Category added successfully");
        } else {
            return redirect()->back()->with("error", "erreur d\'ajout");
        }
    }

    public function delete_cat($id)
    {
        $cat = Category::find($id);
        if ($cat->delete()) {
            return redirect('/admin/categories')->with('success', 'Category deleted');
        } else {
            return redirect()->back()->with("error", "erreur de suppression");;
        }
    }
    public function update_cat(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required'
            ]
        );
        $id = $request->id_cat;
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->description = $request->description;
        if ($cat->update()) {
            return redirect()->back()->with('success', 'Category updated');
        } else {
            return redirect()->back()->with('error', 'Category not updated !!');
        }
    }
}
