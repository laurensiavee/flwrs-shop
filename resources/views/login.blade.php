@extends('layouts.main')

@section('content')

<div class="m-5 p-3">
    <div class="ctr-2a mh-center" style="max-width: 350px">
        <div class="text-center">
            <img src="img/0_tokem-logo.png" class="img-fluid rounded-start big-logo-img mb-4" alt="TOKEM">
            <h3 class="fw-bold font-thicc mt-3 mb-2">Sign In to your account</h3>    
        </div>

        <div class="p-3" style="background-color: white">
            {{-- login failed --}}
            @if(session()->has('loginFailed'))
                <div class="text-center bg-danger opacity-50 my-1 py-1 m-3">
                    <p class="mp-0 py-2 text-light">Login Failed</p>
                </div>
            @endif
            
            {{-- <form action="/action_page.php" id=profile> --}}
            <form action="/login" method="post">
                @csrf
                <label for="email" class="text-secondary">Email address</label>
                <input class="form-control me-2 mb-3 @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password" class="text-secondary">Password</label>
                <input class="form-control me-2 mb-3" type="password" id="password" name="password">
            
                <input type="checkbox" id="remember" name="remember" value="remember-email">
                <label for="remember" class="mb-4">Remember Email</label><br>

                <div class="text-center">
                    <button class="w-100 btn btn-primary btn-block" type="submit">Sign In</button>
                    <p class="text-secondary text-center my-1 p-0">or</p>
                    <a href="/register" class="w-100 btn btn-outline-secondary btn-block">Register</a>    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection