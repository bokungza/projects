@extends('layouts.master')
@section('content')

    <h1> {{ $user->name }}</h1>
    <div class="container emp-profile  bg-secondary text-white">
                <form method="post">
                    <div class="row">

                        <div class="col-md-10">
                            <div class="profile-head">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Username</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>{{ $user->username }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Firstname</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>{{$user->first_name }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Lastname</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>{{$user->last_name }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>{{$user->email }}</p>
                                                </div>
                                            </div>

                            </div>
                        </div>

                    </div>

                </form>
            </div
          <div class="products-container">
<h1>Order</h1>

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">รหัส order</th>
          <th scope="col">ราคา</th>
          <th scope="col">สถานะ</th>
          <th scope="col">เวลาสั่ง</th>

        </tr>
      </thead>
            @foreach ($orders as $order)
            <tr>

            <th scope="row"><a href="{{ action('MyOrdersController@show', [$order->id]) }}">{{$order->id}}</a></th>
               <td>{{$order->total_price}}</td>

               <td>{{$order->status}}</td>
               <td>{{$user->created_at}}</td>



    </tr>

@endforeach
</tbody>
</table>
</div>


@endsection
