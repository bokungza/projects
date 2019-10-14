@extends('layouts.login')

@section('content')
<h1>เพิ่มสินค้า</h1>
<form action="{{ route('pays.store') }}" method = 'pay' enctype="multipart/form-data">
@csrf
    <div>
        Order ID : <input type="number" name ='orderid' class="form-control @error('orderid') is-invalid @enderror" value="{{ old('orderid')}}"><br>
        @error('orderid')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ธนาคาร : <input type="text" name='bank' class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank')}}"><br>
        @error('bank')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        วัน : <input type="number" name='day' class="form-control @error('day') is-invalid @enderror" value="{{ old('day')}}"><br>
        @error('day')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        เดือน : <input type="number" name='month' class="form-control @error('month') is-invalid @enderror" value="{{ old('month')}}"><br>
        @error('month')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ปี : <input type="number" name='year' class="form-control @error('year') is-invalid @enderror" value="{{ old('year')}}"><br>
        @error('year')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ชั่วโมง : <input type="number" name='hour' class="form-control @error('hour') is-invalid @enderror" value="{{ old('hour')}}"><br>
        @error('hour')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        นาที : <input type="number" name='minute' class="form-control @error('minute') is-invalid @enderror" value="{{ old('minute')}}"><br>
        @error('minute')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ชื่อ : <input type="text" name='payerfirstname' class="form-control @error('payerfirstname') is-invalid @enderror" value="{{ old('payerfirstname')}}"><br>
        @error('payerfirstname')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        นามสกุล : <input type="text" name='payerlastname' class="form-control @error('payerlastname') is-invalid @enderror" value="{{ old('payerlastname')}}"><br>
        @error('payerlastname')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        จำนวนเงิน : <input type="number" name='amount' class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount')}}"><br>
        @error('amount')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>

    <input type="submit" html="/pays/create" value = 'ยืนยัน' class="btn btn-primary">
</form>
@endsection