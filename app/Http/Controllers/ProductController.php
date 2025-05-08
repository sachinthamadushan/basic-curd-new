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
        return view('product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_no' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required|numeric',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = null;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->
            store('products', 'public');
        }

        Product::create([
            'product_no' => $request->product_no,
            'product_name' => $request->product_name,
            'unit_price' => $request->unit_price,
            'category_id' => $request->category_id,
            'product_image' => $imagePath, // Only store the path
        ]);

        return redirect()->route('product.index')->
        with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('product.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $product_no)
    {
        $categories = Category::all();
        $product = Product::findOrFail($product_no);
        return view('product.edit',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_no' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required|numeric',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = null;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->
            store('products', 'public');
        }

        $product->update([
            'product_no' => $request->product_no,
            'product_name' => $request->product_name,
            'unit_price' => $request->unit_price,
            'category_id' => $request->category_id,
            'product_image' => $imagePath, // Only store the path
        ]);

        return redirect()->route('product.index')->
        with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
