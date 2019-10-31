@extends('layouts.master')

@section('content')
<h1>แจ้งชำระเงิน</h1>
<form action="{{ route('pays.store') }}" method = 'post' enctype="multipart/form-data">
    @csrf
    <div>
        Order ID : <input type="number" name= 'order_id' class="form-control @error('order_id') is-invalid @enderror" value="{{ old('order_id')}}"><br>
        @error('order_id')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
      <select class="form-control" name ='bank' class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank')}}">
        <option>ธนาคารกรุงเทพ</option>
        <option>ธนาคารกรุงไทย</option>
        <option>ธนาคารไทยพาณิชย์</option>
      </select><br>
        @error('bank')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        วันและเวลาชำระเงิน : <input type="datetime-local" name= 'pay_time' class="form-control @error('pay_time') is-invalid @enderror" value="2019-10-31T12:30"><br>
        @error('pay_time')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div class="row">
    <div class="col">
      ชื่อ : <input type="text" name= 'first_name' class="form-control @error('first_name') is-invalid @enderror" value="{{ Auth::user()->first_name }}"><br>
      @error('first_name')
      <div class = 'alert alert-danger'>{{$message}}</div>
      @enderror
    </div>
    <div class="col">
      นามสกุล : <input type="text" name= 'last_name' class="form-control @error('last_name') is-invalid @enderror" value="{{ Auth::user()->last_name }}"><br>
      @error('last_name')
      <div class = 'alert alert-danger'>{{$message}}</div>
      @enderror
    </div>
    </div>
    <div>
        จำนวนเงิน : <input type="number" name='price' class="form-control @error('price') is-invalid @enderror" value="{{ old('price')}}"><br>
        @error('price')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        <input id="file-upload" type="file" name="image" style="margin-bottom: 10px" class = "@error('image') is-invalid @enderror"><br>
        @error('image')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div class="row">
      <div class="col">
          <input type="hidden" name='status' class="form-control @error('status') is-invalid @enderror" value="รอการเช็คการชำระเงิน"><br>
          @error('status')
          <div class = 'alert alert-danger'>{{$message}}</div>
          @enderror
      </div>
      <div class="col">
          <input type="hidden" name='user_id' class="form-control @error('user_id') is-invalid @enderror" value="{{ Auth::user()->id }}"><br>
          @error('user_id')
          <div class = 'alert alert-danger'>{{$message}}</div>
          @enderror
      </div>
    </div>
    <input type="submit" value='ยืนยัน' class="btn btn-primary">
</form>
@endsection
