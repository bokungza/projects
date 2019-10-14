@extends('layouts.manager')

@section('content')
        <a class="nav-link" href="/pays/create">Create <span class="sr-only">(current)</span></a>
    <h1>รายการแจ้งชำระเงินทั้งหมด</h1>
    @foreach ($pays as $pays)
        <div class='card' style='width: 18rem;'>
            <div class='card-body'>
                <h5 class="card-title">
                    <a href="{{ action('PaysController@show',
                                        ['id' => $pays->id]) }}"
                        {{ $pays->orderid }}
                    ></a>
                </h5>
                <p class="card-text">
                        order id : {{ $pays->orderid}}
                </p>

                <p class="card-text">
                        จำนวนเงิน : {{ $pays->amount}} บาท
                </p>
            </div>
        <a class="nav-link" href="{{ action('PaysController@show',['id' => $pays->id]) }}">อ่านรายละเอียดเพิ่มเติม <span class="sr-only">(current)</span></a>

        </div>
    @endforeach
@endsection