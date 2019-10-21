@extends('layouts.master')

@section('content')
<h1>แจ้งชำระเงิน</h1>
<form action="{{ route('pays.store') }}" method = 'post' enctype="multipart/form-data">
    @csrf
    <div>
        Order ID : <input type="number" name= 'orderid' class="form-control @error('orderid') is-invalid @enderror" value="{{ old('orderid')}}"><br>
        @error('orderid')
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
        วันและเวลาชำระเงิน : <input type="datetime-local" name= 'paystime' class="form-control @error('paystime') is-invalid @enderror" value="{{ old('paystime')}}"><br>
        @error('paystime')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <form>
      <div class="row">
        <div class="col">
          ชื่อ : <input type="text" name= 'firstname' class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname')}}"><br>
          @error('firstname')
          <div class = 'alert alert-danger'>{{$message}}</div>
          @enderror
        </div>
        <div class="col">
          นามสกุล : <input type="text" name= 'lastname' class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname')}}"><br>
          @error('lastname')
          <div class = 'alert alert-danger'>{{$message}}</div>
          @enderror
        </div>
      </div>
    </form>
    <div>
        จำนวนเงิน : <input type="number" name='cost' class="form-control @error('cost') is-invalid @enderror" value="{{ old('cost')}}"><br>
        @error('cost')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <div>
        <input id="file-upload" type="file" name="image" style="margin-bottom: 10px" class = "@error('image') is-invalid @enderror"><br>
        @error('image')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>
    <input type="submit" value='ยืนยัน' class="btn btn-primary">
</form>
@endsection
