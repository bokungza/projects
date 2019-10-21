@extends('layouts.master')

@section('content')
    <div class="products-container">
        <h2>สินค้า</h2>
        <table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">อีเมลล์</th>
      <th scope="col">เวลาลงทะเบียน</th>
      <th scope="col">ลบ</th>
    </tr>
  </thead>
        @foreach ($users as $user)
        <tr>
        <th scope="row">{{$user->id}}</th>
           <td>{{$user->first_name}}</td>
           <td>{{$user->last_name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->created_at}}</td>
           <td>
             <form method = "post" action ="{{route('users.destroy' , ['user'=>$user->id])}}" >
               @csrf
               <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger ">Delete</button>
           </form>
           </td>
</tr>

        @endforeach
      </tbody>
</table>
    </div>


@endsection
