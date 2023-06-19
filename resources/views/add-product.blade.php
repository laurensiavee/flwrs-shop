@extends('layouts.main')

@section('content')

<div class="m-5">
    <div class="my-5">
        <form action="/admin-products/products/" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <img src="img_test.jpg" class="card-img-top" alt="...">
            <div class="mt-5 mb-3">
                <label for="img" class="me-5">Photo</label>
                <input type="file" id="img" name="img" class="ms-5" accept="image/jpg, image/jpeg, image/png">
                <input type="submit" value="Upload" id="img">
            </div> --}}

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="image", name="image">
                <label class="input-group-text" for="image">Upload Image</label>
              </div>
            
            <label for="name">Name</label>
            <input class="form-control me-2 mb-3" type="text" id="name" name="name">

            <label for="price">Price</label>
            <input class="form-control me-2 mb-3" type="text" id="price" name="price">
            
            <label for="stock">Stock</label>
            <input class="form-control me-2 mb-3" type="text" id="stock" name="stock">

            <label for="description">Descripton</label>
            <textarea class="form-control me-2 mb-3" type="text" id="description" name="description", rows="7"></textarea>

            <label for="category_id" class="me-5">Category</label>
            {{-- <select name="category_id" id="category" class="form-select ms-5"> --}}
            <select name="category_id" class="form-select ms-5 ctr-3">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>            
                @endforeach
            </select>

            <div class="mt-5 mb-5">
                <div class="text-end">
                    <button class="btn btn-outline-secondary me-2">Cancel</button>
                    <button class="btn btn-primary" type="submit">Add</button>    
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
