<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container-fluid ms-5 me-5">
      <img src="/img/0_tokem-logo.png" class="navbar-brand mp-0 logo-img" alt="FLWRS">

      <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0 nav mh-center">
        {{-- guest --}}
        @auth
        @else
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/about">About Us</a>
          </li>
        @endauth
        {{-- member --}}
        @can('member')
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/transactions">My Transactions</a>
          </li>
        @endcan
        {{-- admin --}}
        @can('admin')
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/admin-products/products">Manage Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="/categories">Add Category</a>
          </li>
        @endcan
        </ul>

        {{-- auth nav kanan member --}}
        @auth
        @can('member')
          <a href="cart" class="me-2">
            <img src="/img/0_cart-icon.png" class="logo-nav" alt="...">
          </a>
        @endcan

          <a href="/profile/" class="ms-2 d-flex">
            <img src="/img/0_profile-icon.png" class="logo-nav img-round me-2 mv-center" alt="...">
            <div class="container mp-0">
                @can('member')
                <p class="text-start mp-0">{{ Auth::user()->name }}</p>
                @endcan
                @can('admin')
                <p class="text-start mp-0">{{ Auth::user()->name }}</p>
                @endcan
                <p class="text-start mp-0">View profile</p>
            </div>
          </a>

        @else
          <form class="d-flex">
            <a href="/login" class="btn btn-outline-secondary me-2 my-1">Sign in</a>
            <a href="/register" class="btn btn-primary me-2 my-1">Sign up</a>
          </form>
        @endauth

        
        
      </div>
    </div>
  </nav>