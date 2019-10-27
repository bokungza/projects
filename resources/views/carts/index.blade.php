@extends('layouts.master')

@section('content')


<div class="products-container">
      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">สินค้า</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">ราคา</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">จำนวน(กก.)</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">ยกเลิก</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($carts as $cart)
                <tr>
                  <th scope="row" class="border-0">
                      <p style="display: none">{{$product = \App\Product::findOrFail($cart->product_id)}}</p>
                    <div class="p-2">
                      <img src="{{ asset('img/'.$product->picture) }}"  width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$product->name}}</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle text-center"><strong>฿{{$cart->total_price}}</strong></td>
                  <td class="border-0 align-middle text-center"><strong>{{$cart->count}}</strong></td>
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
        <div class="col-lg-4">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">สรุปรายการสั่งซื้อ </div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom">
                  <strong class="text-muted">ยอดรวม</strong>
                  <strong>
                      ฿{{DB::table('carts')
                ->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)
                ->sum('total_price')}}</strong>
              </li>
            </ul>
              <form action="{{ asset('/myOrders') }}" method = 'post' enctype="multipart/form-data">
                  @csrf
                  <input type="submit" class="btn btn-dark rounded-pill py-2 btn-block" value="ยืนยัน">
              </form>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection
