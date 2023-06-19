@extends('layouts.main')

@section('content')

<div class="m-5">
    <div class="my-5">
        <form action="/admin-products/products/{{ $product->slug }}" method="post">
            @method('put')
            @csrf
            <img src="img_test.jpg" class="card-img-top" alt="...">
            <div class="mt-5 mb-3">
                <label for="img" class="me-5">Photo</label>
                <input type="file" id="img" name="img" class="ms-5" accept="image/jpg, image/jpeg, image/png">
                <input type="submit" value="Upload" id="img">
                {{-- <button class="btn btn-outline-success" type="submit">Upload</button> --}}    
            </div>
            
            <label for="name">Name</label>
            <input class="form-control me-2 mb-3" type="text" id="name" name="name" value="{{ old('name', $product->name) }}">

            <label for="price">Price</label>
            <input class="form-control me-2 mb-3" type="text" id="price" name="price" value="{{ old('price', $product->price) }}">
            
            <label for="stock">Stock</label>
            <input class="form-control me-2 mb-3" type="text" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">

            <label for="description">Descripton</label>
            <textarea class="form-control me-2 mb-3" type="text" id="description" name="description", rows="7" value="{{ old('description', $product->description) }}"></textarea>

            <label for="category_id" class="me-5">Category</label>
            {{-- <select name="category_id" id="category" class="form-select ms-5"> --}}
            <select name="category_id" class="form-select ms-5">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>            
                @endforeach
            </select>

            <div class="mt-5 mb-5">
                <div class="text-end">
                    <a href="/admin-products/products/" class="btn btn-outline-secondary me-2">Cancel</a>
                    <button class="btn btn-primary" type="submit">Update</button>    
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
