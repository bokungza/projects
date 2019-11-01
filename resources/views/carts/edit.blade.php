@extends('layouts.master')

@section('content')


    <div class="products-container">

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-8" style="width: 100%; flex: 0px ; max-width: 100%;">
                <div class="card">
                    <div class="card-header">
                        ตะกร้าสินค้า
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="p-2 px-3 text-uppercase" style="text-align: center">สินค้า</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center">กก.ละ</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center">จำนวน(กก.)</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center">ราคา</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center">In Stock (กก.)</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center"></div>
                                    </th>
                                    <th scope="col" class="border-0 bg-secondary">
                                        <div class="py-2 text-uppercase" style="text-align: center"></div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($carts as $cart)

                                    <tr class = "bg-light">
                                        <th scope="row" class="border-0">
                                            <p style="display: none">{{$product = \App\Product::findOrFail($cart->product_id)}}</p>
                                            <div class="p-2">
                                                <img src="{{ asset('img/'.$product->picture) }}"  width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$product->name}}</a></h5>
                                                </div>
                                            </div>
                                        </th>
                                        <form action="{{ route('cart.update',['cart' => $cart])}}" method="post">
                                            @csrf
                                            @method('PUT')
                                        <td class="border-0 align-middle text-center"><strong>฿{{$product->unit_price}}</strong></td>
                                        <td class="border-0 align-middle text-center">
                                            <input type="number" value="{{$cart->count}}" name="count" style="width: 30%">
                                        </td>
                                        <td class="border-0 align-middle text-center"><strong>฿{{$cart->total_price}}</strong></td>
                                        <td class="border-0 align-middle text-center"><strong>{{$product->count}}</strong></td>
                                        <td class="border-0 align-middle text-center">
                                            <button type='submit' class="btn btn-primary">บันทึก</button>
                                        </td>
                                        </form>
                                        <td class="border-0 align-middle text-center">
                                            <form action="{{ route('cart.destroy',['cart' => $cart->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type='submit' class="btn btn-outline-danger">DELETE</button>
                                            </form>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </div>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
@endsection
