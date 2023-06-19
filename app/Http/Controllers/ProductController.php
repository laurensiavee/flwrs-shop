<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $result = '';
        if(request('search')) {
            $result = "Search result for: " . request('search');
        }

        return view('products', [
            'title' => 'Products',
            'search_res' => $result,
            'products' => Product::latest()->filter()->paginate(12)->withQueryString()
            // 'products' => Product::latest()->get()
            // 'products' => DB::table('products')->paginate(15)
        ]);
    }

    public function single(Product $product){
        return view('product-detail', [
            'title' => 'Product Detail', 
            'product' => $product
        ]);
    }
}
