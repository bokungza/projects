@extends('layouts.master')

@section('content')
  <h1>เพิ่มรหัสส่งสินค้า</h1>

  <form action="{{route('pays.update', ['pay' => $pay->id])}}" method="POST">
    @csrf
    @method("PUT")
    <div>
      <label for="status">Post Title</label>
      <select class="form-control form-control-lg" name='status'>
      <option>รอการเช็คการชำระเงิน</option>
      <option>ชำระเงินผิดพลาด</option>
      <option>ชำระเงินเสร็จสิ้น</option>
    </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">อัพเดทรหัสส่งสินค้า</button>

    
  </form>
@endsection
