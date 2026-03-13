<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::active()
            ->ordered()
            ->paginate(12);
        
        return view('shop.index-redesign', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedProducts = Product::active()
            ->where('id', '!=', $product->id)
            ->ordered()
            ->limit(4)
            ->get();
        
        return view('shop.show-redesign', compact('product', 'relatedProducts'));
    }
}
