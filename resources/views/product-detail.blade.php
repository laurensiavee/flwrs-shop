@extends('layouts.main')

@section('content')

<div class="m-5 p-2">
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col text-center mv-center">
        {{-- <img src="img/2_plant.png" class="img-fluid rounded-start detail-img-rz" alt="..."> --}}
        <img src="/{{ $product->image_path }}" class="detail-img-rz" alt="...">
      </div>
      
      <div class="col-md-8 mh-center">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title fw-bold font-thicc mb-2"><b>{{ $product->name }}</b></h2>
              <p class="card-text text-secondary">{{ $product->description }}</p>
              <p class="card-text text-secondary">Stock: {{ $product->stock }}</p>
              <div class="card-text d-flex">
                  <p class="card-text text-secondary">Category: </p>
                  <p class="btn btn-sm not-btn disabled btn-c-1 ctr-140p mx-3">{{ $product->category->categoryName }}</p>
              </div>
              <p class="card-text text-secondary">IDR {{ $product->price }}</p>
            </div>
          </div>
          
          {{-- guest --}}
          @auth
          @else
          <div class="col mv-center">
            <div class="text-center">
              <form action="/action_page.php">
                <input class="form-control ctr-140p mh-center my-2 px-2" type="qty" id="qty" name="qty">
                {{-- <button class="btn btn-primary btn-block ctr-140p my-2 px-2" type="submit">Add to cart ></button> --}}
                <a href="/login" class="btn btn-sm text-secondary mp-0" onclick="confirm alert('Please sign in to add to cart!')"><b>+   Add to cart</b></a>
              </form>
            </div>
          </div>
          @endauth

          @can('member')
          <div class="col mv-center">
            <div class="text-center">
              <form action="/action_page.php">
                <input class="form-control ctr-140p mh-center my-2 px-2" type="qty" id="qty" name="qty">
                <button class="btn btn-primary btn-block ctr-140p my-2 px-2" type="submit">Add to cart ></button>
              </form>
            </div>
          </div>
          @endcan
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
