@extends('layouts.main')

@section('content')

<div class="m-5 p-3">
    <div class="ctr-70a mh-center" style="max-width: 500px">
        <div class="text-center">
            <h3 class="fw-bold font-thicc mt-3 mb-2">Update Your Profile</h3>    
        </div>

        <form action="/update-profile" method="update">
            {{-- @method('put'); --}}
            @csrf
            <div class="form-row">
                <div class="col mb-3">
                    <label for="name">Name</label>
                    {{-- <input type="text" class="form-control is-valid" id="name" name="name" placeholder="" value="" required> --}}
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="" value="{{ old('name', Auth::user()->name) }}">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                            {{-- Please provide a valid name. --}}
                        </div>
                    @enderror
                </div>
                <div class="col mb-3">
                    <label for="email">Email</label>
                    <p class="form-control" id="email" name="email" placeholder="" value="">{{ Auth::user()->email }}</p>
                </div>
            </div>
        
            <div class="form-row d-flex">
                <div class="col-md-6 mb-3 me-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <div class="col-md-6 mb-3">
                    <label for="password2">Confirm Password</label>
                    <input type="password" class="form-control @error('password2') is-invalid @enderror" id="password2" name="password2" placeholder="" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @error('password2')
                        <div class="invalid-feedback">
                            password didn't match!
                        </div>
                    @enderror
                </div>
            </div>
        
            <div class="form-row">
                <div class="col mb-3">
                    <label for="address">Address</label>
                    {{-- <input type="text" class="form-control is-invalid" id="address" rows="3" placeholder="" required> --}}
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" value="{{ old('address', Auth::user()->address) }}"></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="col mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="" value="{{ old('phone', Auth::user()->phone) }}">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        
            <div class="mt-5">
                <div class="d-flex text-end">
                    <a href="/profile" class="btn btn-primary me-2">Cancel</a>
                    <button class="btn btn-primary me-2" type="submit">Save</button>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection