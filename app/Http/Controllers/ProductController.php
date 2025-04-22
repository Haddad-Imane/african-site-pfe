<?php

namespace App\Http\Controllers;

use App\Models\Product; // Ensure this line is correct
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Return the view with products
    }

    // Search for products
    public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search query
        $products = Product::where('title', 'LIKE', "%{$query}%")->get(); // Search products

        return view('products.search', compact('products')); // Return the search results
    }

    // Show a specific product
    public function show($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        return view('products.show', compact('product')); // Return the product detail view
    }

    // Add a product to the cart (example method)
    public function addToCart($id)
    {
        // Logic to add the product to the cart
        // This can involve session handling or database operations depending on your cart implementation

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
