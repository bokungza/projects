@extends('layouts.manager')

@section('content')
</h1>
<div class="card">
<div class="card-text">Order ID : {{ $pay->orderid }}</p>
<div class="card-text">ธนาคาร : {{ $pay->bank }}</p>
<div class="card-text">วัน : {{ $pay->month }}/{{ $pay->year }}/{{ $pay->hour }}</p>
<div class="card-text">เวลา : {{ $pay->hour }}:{{ $pay->minute }}</p>
<div class="card-text">ชื่อผู้ชำระเงิน : {{ $pay->firstname }} {{ $pay->lastname }}</p>
<div class="card-text">จำนวนเงิน : {{ $pay->cost }}</p>
    
    <a class="nav-link" href="/pays/">ย้อนกลับ <span class="sr-only">(current)</span></a>
</div>
@endsection
