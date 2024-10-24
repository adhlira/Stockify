<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductPage()
    {
        $products = Product::simplePaginate(5);
        return view('components.products', ['products' => $products]);
    }

    public function AddProductPage()
    {
        $categories = Category::all();
        return view('components.add_product', compact('categories'));
    }

    public function EditProductPage($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();
        return view('components.edit_product', compact('categories', 'product'));
    }

    public function EditProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'stock' => 'required'
        ]);

        $product->name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->stock = $request->input('stock');
        $product->save();

        return redirect()->route('product_page')->with('success', 'Data has been successfully edited');
    }

    public function AddProduct(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'stock' => 'required'
        ]);

        $product = new Product();
        $product->category_id = $validateData['category_id'];
        $product->name = $validateData['product_name'];
        $product->stock = $validateData['stock'];
        $product->save();

        return redirect('products')->with('success', 'Added Data Successfully');

    }
}