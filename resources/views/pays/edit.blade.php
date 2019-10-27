@extends('layouts.master')

@section('content')
  <h1>เพิ่มรหัสส่งสินค้า</h1>

  <form action="{{route('pays.update', ['pay' => $pay->id])}}" method="POST">
    @csrf
    @method("PUT")
    <div>
      <label for="shipping">Post Title</label>
      <input type="text" class='form-control' name='shipping' value="{{old('shipping', $pay->shipping)}}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">อัพเดทรหัสส่งสินค้า</button>
  </form>
@endsection
