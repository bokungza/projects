@extends('layouts.master')

@section('content')

<div>
    <h1>Order ID : {{ $orders->id}}</h1>
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
                </tr>
              </thead>
              <tbody>
            
        @foreach ($order_details as $order_detail)
        <tbody>
        <tr>
            <td>{{ $order_detail->id}}</td>
            <td>{</td>
            <td class="text-danger"></td>
        </tr>
        @endforeach
        </table>
</div>
@endsection
