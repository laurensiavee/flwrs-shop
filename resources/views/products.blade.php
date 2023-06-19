@extends('layouts.main')

@section('content')

<div class="m-5">
    <div class="my-5">
        <div class="mh-center d-flex">
            {{-- guest --}}
            @auth
            @else
            <div class="ctr-70">
                <h3 class="fw-bold font-thicc">Our Products</h3>
            </div>
            <div class="ctr-30">
                <form action="/products" class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search.." aria-label="Search" name="search">
                    <button class="btn btn-sm btn-secondary" type="submit">Search</button>
                </form>
            </div>
            @endauth
            
            {{-- member --}}
            @can('member')
            <div class="ctr-70">
                <h3 class="fw-bold font-thicc">Our Products</h3>
            </div>
            <div class="ctr-30">
                <form action="/products" class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search.." aria-label="Search" name="search">
                    <button class="btn btn-sm btn-secondary" type="submit">Search</button>
                </form>
            </div>
            @endcan

            {{-- admin --}}
            @can('admin')
            <div class="ctr-2">
                <h3 class="fw-bold font-thicc">Our Products</h3>
            </div>
            <div class="ctr-20 text-end me-2 mv-center">
                <a href="/admin-products/products/create" class="btn btn-sm btn-outline-secondary"><b> Add Product</b></a>
            </div>
            <div class="ctr-30">
                <form action="/products" class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search.." aria-label="Search" name="search">
                    <button class="btn btn-sm btn-secondary" type="submit">Search</button>
                </form>
            </div>
            @endcan
        </div>
    </div>

    <div class="mp-0 my-5">
        <h4 class="fw-bold font-thicc">{{ $search_res }}</h4>

        <div class="mh-center d-flex">
            @if ($products->count())
            <div class="cards">
                {{-- card --}}
                @foreach ($products as $product)
                    {{-- <a href="/product-detail/{{ $product->slug }}"> --}}
                        {{-- guest --}}
                        @auth
                        @else
                        <div onclick="javascript:window.location.href='/product-detail/{{ $product->slug }}'" style="cursor: pointer;">
                        @endauth
                        {{-- member --}}
                        @can('member')
                        <div onclick="javascript:window.location.href='/product-detail/{{ $product->slug }}'" style="cursor: pointer;">
                        @endcan
                        {{-- admin --}}
                        @can('admin')
                        <div onclick="javascript:window.location.href='/admin-products/products/{{ $product->slug}}'" style="cursor: pointer;">
                        @endcan
                        
                        <div class="card card-w text-center mh-center p-3">
                            <div class="card-img-top mh-center">
                                <div class="thum-img-rz mh-center">
                                    @if ($product->image)
                                    {{-- <img src="/{{ asset('storage/'. $product->image) }}" class="thum-img-rz" alt="..."> --}}
                                    <img src="/storage/product-images/{{ $product->image }}" class="thum-img-rz" alt="...">
                                    @else
                                    <img src="/{{ $product->image_path }}" class="thum-img-rz" alt="...">
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold font-thicc text-center mb-2">{{ $product->name }}</h5>
                                <p class="card-text text-secondary text-center">IDR {{ $product->price }}</p>
                                <div class="card-text text-center">
                                    <p class="btn btn-sm not-btn disabled btn-c-1">{{ $product->category->categoryName }}</p>
                                </div>
                            </div>

                            {{-- guest --}}
                            @auth
                            @else
                            <div class="card-footer text-center">
                                {{-- if stock 0 --}}
                                @if ($product->stock === 0)
                                <p class="card-text text-danger text-opacity-75 text-center"><b>This product is unavailable</b></p>
                                @else
                                <a href="/login" class="btn btn-sm text-secondary mp-0" onclick="confirm alert('Please sign in to add to cart!')"><b>+   Add to cart</b></a>
                                @endif
                            </div>
                            @endauth

                            {{-- member --}}
                            @can('member')
                            <div class="card-footer text-center">
                                {{-- <a href="/cart" class="btn btn-sm text-secondary mp-0"><b>+   Add to cart</b></a> --}}
                                {{-- if stock 0 --}}
                                @if ($product->stock === 0)
                                <p class="card-text text-danger text-opacity-75 text-center"><b>This product is unavailable</b></p>
                                @else
                                <a href="/cart" class="btn btn-sm text-secondary mp-0"><b>+   Add to cart</b></a>
                                @endif
                            </div>
                            @endcan

                            {{-- admin --}}
                            @can('admin')
                            <div class="card-footer text-center d-flex">
                                {{-- <a href="admin-products/edit" class="card-text text-secondary text-center"><b>Edit Product</b></a> --}}
                                {{-- <a href="admin-products" class="card-text text-danger text-opacity-75 text-center"><b>Remove Product</b></a> --}}
                                
                                {{-- update --}}
                                <a href="/admin-products/products/{{ $product->slug }}/edit" class="card-text text-secondary text-center"><b>Edit Product</b></a>
                                {{-- delete --}}
                                <form action="/admin-products/products/{{ $product->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are You Sure?')" class="card-text text-danger text-opacity-75 text-center border-0"><b>Remove Product</b>/button>
                                </form>
                            </div>
                            @endcan
                        </div>
                        </div>
                    {{-- </a> --}}
                @endforeach
                {{-- card --}}
                {{-- <a href="/product-detail">
                    <div class="card card-w text-center mh-center p-3">
                        <div class="card-img-top mh-center">
                            <div class="thum-img-rz mh-center">
                                <img src="img/2_plant.png" class="thum-img-rz" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold font-thicc text-center mb-2">Acanthocereus tetragonus</h5>
                            <p class="card-text text-secondary text-center">IDR 25,000.00</p>
                            <div class="card-text text-center">
                                <p class="btn btn-sm not-btn disabled btn-c-1">Standard</p>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-sm text-danger not-btn disabled mp-0" type="submit"><b>This product is unavailable</b></button>
                        </div>
                    </div>
                </a> --}}
                
            </div>
        </div>
    </div>

@else 
    <h4 class="fw-bold font-thicc mx-5">No product match.</h4>
@endif

<div class="d-flex justify-content-center">
    {{ $products->links() }}
</div>

</div>


@endsection
