<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoriesPage()
    {
        $categories = Category::all();
        return view('components.categories', ['categories' => $categories]);
    }

    public function AddCategoryPage()
    {
        return view('components.add_category');
    }

    public function Add(Request $request)
    {
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories,name'
        ]);

        $category = new Category();
        $category->name = $validateData['category_name'];
        $category->save();

        return redirect('/categories')->with('success', 'Successfully Added Data');
    }

    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories')->with('success', 'Data has been deleted');
    }
}
