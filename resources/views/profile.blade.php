@extends('layouts.main')

@section('content')

<div class="m-5 p-3">
    <div class="ctr-70a mh-center" style="max-width: 500px">
        <div class="text-center">
            <h3 class="fw-bold font-thicc mt-3 mb-2">Your Profile</h3>    
        </div>

        <div class="p-3" style="background-color: white">
            <div class="form-row">
                <div class="col mb-3">
                    <label for="name">Name</label>
                    <p class="form-control" id="name" name="name" placeholder="" value="">{{ Auth::user()->name }}</p>
                </div>
                <div class="col mb-3">
                    <label for="email">Email</label>
                    <p class="form-control" id="email" name="email" placeholder="" value="email">{{ Auth::user()->email }}</p>
                </div>
                <div class="col mb-3">
                    <label for="name">Password</label>
                    <p class="form-control" type="password" id="password" name="password" placeholder="" value="password">password</p>
                </div>
                <div class="col mb-3">
                    <label for="name">Address</label>
                    <p class="form-control" id="address" name="address" placeholder="" value="address">{{ Auth::user()->address }}</p>
                </div>
                <div class="col mb-3">
                    <label for="name">Phone</label>
                    <p class="form-control" id="phone" name="phone" placeholder="" value="phone">{{ Auth::user()->phone }}</p>
                </div>

                <div class="mt-5">
                    <div class="d-flex text-end">
                        <a href="/update-profile/" class="btn btn-primary me-2" type="submit">Update</a>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Sign Out</button>   
                        </form>
                    </div>
                </div>

        </div>
    </div>
</div>


@endsection