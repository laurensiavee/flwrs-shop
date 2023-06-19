@extends('layouts.main')

@section('content')

<div class="mx-2">
    <div class="m-5">
        <div class="mb-5 pb-5">
            <h3 class="fw-bold font-thicc mt-5 mb-2">Your cart</h3>    

            <table class="table table-striped">
                <thead class="table-secondary">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">qty</th>
                    <th scope="col">Subtotal</th>
                </tr>
                </thead>

                <tbody>
                
                
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>
                        <input type="number" name="quantity" value="" class="text-center" />
                    </td>
                    <td>@mdo</td>
                </tr>

                <tr>
                    <td colspan="5">
                        <h4 class="fw-bold font-thicc mt-1 mb-2 me-1 text-end">IDR 230,000.00</h4>    
                    </td>
                </tr>
                </tbody>
            </table>
            
            <div class="mt-5 mb-5">
                <div class="text-end">
                    {{-- <button class="btn btn-primary me-2" type="submit">Check Out</button> --}}
                    <a href="/check-out" class="btn btn-primary me-2">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection