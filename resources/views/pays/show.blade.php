@extends('layouts.manager')


@section('content')
<div class='card'>
    <h1 class="card-text">
        order id : {{ $pay->orderid}}
    </h1>
    <p class="card-text">
        ธนาคาร : {{ $pay->bank}}
    </p>
    <p class="card-text">
        วันที่ชำระ : {{ $pay->day}}/{{ $pay->month}}/{{ $pay->year}}
    </p>
    <p class="card-text">
        เวลาชำระเงิน : {{ $pay->hour}}:{{ $pay->minute}}
    </p>
    <p class="card-text">
        ชื่อผู้ชำระเงิน : {{ $pay->payerfirstname}} {{ $pay->payerlastname}}
    </p>
    <p class="card-text">
        จำนวนเงิน : {{ $pay->amount}}
    </p>
    <a class="nav-link" href="/pays">กลับ <span class="sr-only">(current)</span></a>

    </div>

@endsection