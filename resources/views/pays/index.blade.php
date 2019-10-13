@extends('layouts.manager')

@section('content')
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
                        ธนาคาร : {{ $pays->bank}}
                </p>
                <p class="card-text">
                        วันที่ชำระ : {{ $pays->day}}/{{ $pays->month}}/{{ $pays->year}}
                </p>
                <p class="card-text">
                        เวลาชำระเงิน : {{ $pays->hour}}:{{ $pays->minute}}
                </p>
                <p class="card-text">
                        ชื่อผู้ชำระเงิน : {{ $pays->payerfirstname}} {{ $pays->payerlastname}}
                </p>
                <p class="card-text">
                        จำนวนเงิน : {{ $pays->amount}}
                </p>
            </div>
        </div>
    @endforeach
@endsection