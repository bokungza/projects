@extends('layouts.login')

@section('content')
<h1>แจ้งชำระเงิน</h1>
<form action="{{ route('pays.store') }}" method = 'pay' enctype="multipart/form-data">
    @csrf
    <div>
        Order ID : <input type="number" name= 'orderid' class="form-control @error('orderid') is-invalid @enderror" value="{{ old('orderid')}}"><br>
        @error('orderid')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ธนาคาร : <input type="text" name ='bank' class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank')}}"><br>
        @error('bank')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        วัน : <input type="number" name= 'day' class="form-control @error('day') is-invalid @enderror" value="{{ old('day')}}"><br>
        @error('day')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div><div>
        เดือน : <input type="number" name= 'month' class="form-control @error('month') is-invalid @enderror" value="{{ old('month')}}"><br>
        @error('month')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div><div>
        ปี : <input type="number" name= 'year' class="form-control @error('year') is-invalid @enderror" value="{{ old('year')}}"><br>
        @error('year')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    </div><div>
        ชั่วโมง : <input type="number" name= 'hour' class="form-control @error('hour') is-invalid @enderror" value="{{ old('hour')}}"><br>
        @error('hour')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        นาที : <input type="number" name= 'minute' class="form-control @error('minute') is-invalid @enderror" value="{{ old('minute')}}"><br>
        @error('minute')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        ชื่อ : <input type="text" name= 'firstname' class="form-control @error('firstname') is-invalid @enderror" value="{{ old('orderid')}}"><br>
        @error('firstname')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        นามสกุล : <input type="text" name= 'lastname' class="form-control @error('lastname') is-invalid @enderror" value="{{ old('orderid')}}"><br>
        @error('lastname')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        จำนวนเงิน : <input type="number" name='cost' class="form-control @error('cost') is-invalid @enderror" value="{{ old('price')}}"><br>
        @error('cost')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>

    <input type="submit" value = 'ยืนยัน' class="btn btn-primary">
</form>
@endsection