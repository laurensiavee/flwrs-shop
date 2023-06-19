<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        $result = '';
        if(request('search')) {
            $result = "Search result for: " . request('search');
        }

        return view('products', [
            'title' => 'Products',
            'search_res' => $result,
            'products' => Product::latest()->filter()->paginate(12)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('admin');

        return view('add-product', [
            "title" => "Add Product",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('admin');

        // $validated = $request->validate([
        //     // name email password2 address phone
        //     'name' => ['required', 'min:5'],
        //     // 'slug' => ['required', 'unique:products'],
        //     'description' => ['required', 'min:15', 'max:500'],
        //     'price' => ['required', 'integer', 'min:1000', 'max:10000000'],
        //     'stock' => ['required', 'integer', 'min:1', 'max:10000'],
        //     'image' => 'image|file|max:1024',
        //     // 'image_path' => ['required'],
        //     'category_id' => ['required']
        // ]);

        $validated = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'image' => 'image|file|max:1024',
            'category_id' => ['required']
        ]);

        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }

        $validated['slug'] = Str::slug($request['name']);
        $validated['image_path'] = '/img/0_tokem-logo.png';

        Product::create($validated);

        // return($validated);
        return redirect('/admin-products/products/');
        // return($validated);
    }

    /**
 * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return $product;
        return view('product-detail', [
            'title' => 'Product Detail', 
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('update-product', [
            "title" => "Update Product",
            "product" => $product,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'image' => 'image|file|max:1024',
            'category_id' => ['required']
        ];

        $validated = $request->validate($rules);

        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }

        $validated['slug'] = Str::slug($request['name']);
        $validated['image_path'] = '/img/0_tokem-logo.png';

        Product::where('id', $product->id)->update($validated);

        // return($validated);
        return redirect('/admin-products/products/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Product::destroy($product->id);
        return redirect('/admin-products/products');
    }
}
