@extends('layouts.manager')

@section('content')
    <h1>รายการแจ้งชำระเงินทั้งหมด</h1>
    @foreach ($pays as $pay)
        <div class='card'>
            <div class='card-body'>
                <h5 class="card-title">
                    <a href="{{ action('PaysController@show',
                                        ['id' => $pay->id]) }}"
                        {{ $pay->orderid }}
                    ></a>
                </h5>
                <p class="card-text">
                        order id : {{ $pay->orderid}}
                </p>

                <p class="card-text">
                        จำนวนเงิน : {{ $pay->amount}} บาท
                </p>
            </div>
            <a class="nav-link" href="pays/{{ $pay->id}}">อ่านรายละเอียดเพิ่มเติม <span class="sr-only">(current)</span></a>

        </div>
    @endforeach

@endsection