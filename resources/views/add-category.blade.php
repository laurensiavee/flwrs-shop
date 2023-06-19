@extends('layouts.main')

@section('content')

<div class="m-5">
  <div class="my-5">
    <p class="mt-3 mb-0 text-secondary">Available Categories</p>
    <div class="mb-4">
      <div class="cards">
        @foreach ($categories as $category)  
          <div class="card card-w m-1 ctr-3">
            <div class="row mx-2 ms-0">
              <div class="col-2 mp-0 btn-c-1"></div>
              <div class="col-8 mp-0">
                <div class="card-body mp-0">
                    <p class="mp-0 p-1">{{ $category->categoryName }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    
    <div class="mt-4 mb-5 p-2">
      <h3 class="fw-bold font-thicc me-5 mb-3">Add new Categories</h3>
    
      <form method="post" action="/categories/">
        @csrf  
        <label for="categoryName">Category Name</label>
        <input class="form-control me-2 mb-4" type="text" id="categoryName" name="categoryName">  
        
        {{-- <label for="slug">slug</label>
        <input class="form-control me-2 mb-4" type="text" id="slug" name="slug">   --}}

        <div class="my-5">
          <div class="text-end">
              <button class="btn btn-primary" type="submit">Add Category</button>    
          </div>
        </div>  
      </form>
    
    </div>   

  </div>
</div>

@endsection