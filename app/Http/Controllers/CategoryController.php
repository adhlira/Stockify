<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
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
        $name = Str::lower($request->input('category_name'));
        $category_exist = Category::whereRaw('LOWER(name) = ?', [$name])->exists();
        $request->validate([
            'category_name' => 'required|string'
        ]);
        if ($category_exist) {
            return back()->withErrors(['category_name' => 'The category name has already been taken.']);
        }
        Category::create([
            'name' => $request->input('category_name')
        ]);

        return redirect('/categories')->with('success', 'Successfully Added Data');
    }

    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories')->with('success', 'Data has been deleted');
    }
}
