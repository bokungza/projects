@extends('layouts.master')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <h2>รายชื่อลูกค้า</h2>
  </div>
  <div class="card-body">
    <table class="table  table-bordered table-hover ">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">นามสกุล</th>
          <th scope="col">อีเมลล์</th>
          <th scope="col">เวลาลงทะเบียน</th>
          <th scope="col">ประวัติ</th>
          <th scope="col">ลบ</th>
        </tr>
      </thead>
          @foreach ($users as $user)
          <tbody>
                  <th scope="row">{{$user->id}}</th>
                     <td>{{$user->first_name}}</td>
                     <td>{{$user->last_name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->created_at}}</td>

                     <td>
                        <a href="{{route('users.show' ,  ['user' => $user->id])}}">ดู</a>
                     </td>
                     <td>


                        <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal">Delete</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">ลบ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>คุณต้องการลบใช่ไหม</p>
                              </div>
                              <div class="modal-footer">
                                <form method = "post" action ="{{route('users.destroy' , ['user'=>$user->id])}}" >
                                  @csrf
                                  @method('DELETE')
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button  type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                              </div>
                            </div>
                          </div>
                        </div>


                     </td>
          </tr>

                  @endforeach
                </tbody>
    </table>

  </div>
</div>
@endsection
