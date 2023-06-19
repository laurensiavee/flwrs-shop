@extends('layouts.main')

@section('content')

<div class="mx-2">
    <div class="m-5">
        <div class="mb-5 pb-5">
            <h3 class="fw-bold font-thicc mt-5 mb-2">Please confirm your order</h3>    

            <table class="table table-striped">
                <thead class="table-secondary">
                <tr>
                    <th colspan="2" scope="col">Product</th>
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
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>

                <tr>
                    <td colspan="5">
                        <h4 class="fw-bold font-thicc mt-1 mb-2 me-1 align-r">IDR 230,000.00</h4>    
                    </td>
                </tr>
                </tbody>
            </table>
            
            <p class="text-secondary">Ship to: Jl. Raya</p>


            <div class="wh-100">
                <div class="w-250 p-3 align-r">
                    <form action="/action_page.php" id=check-out>
                        <label for="passcode">Please enter the following passcode to checkout: Q6YD85</label>
                        <input class="form-control me-2 mb-3" type="text" id="passcode" name="passcode">
                    </form>
                    <div class="pb-2"></div>
                    <div class="text-end pb-5 mt-3">
                        {{-- <button class="btn btn-primary btn-block" type="submit">Confirm</button> --}}
                        <a href="transactions" class="btn btn-primary btn-block">Confirm</a>
                    </div>
                </div>    
            </div>
            <div class="mb-5 pb-5"></div>
            <div class="mb-5 pb-5"></div>
        </div>
    </div>
</div>

@endsection