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
