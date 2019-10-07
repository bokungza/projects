@extends('layouts.manager')

@section('content')
<h1>เพิ่มสินค้า</h1>
<form action="" method = 'post'>
ชื่อสินค้า : <input type="text" name ='name'><br>
รายละเอียดสินค้า : <input type="text" name= 'detail'><br>
ราคา : <input type="number" name='price'><br>
<input type="submit" value = 'ยืนยัน'>
</form>
@endsection
