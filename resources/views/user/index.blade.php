 @php
 // session_start();
 // $list = $_SESSION['list'];
 @endphp

 @extends('layouts.master')
 @section('content')
 <div class="container">
     <h3>Danh sách người dùng</h3>
     <br>
     <a href="{{route('users.create')}}" class="btn btn-sm btn-success">Add</a>
     <br>
     <br>
     <div class="table-responsive">
         <table class="table table-hover">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
                     {{-- <th style="text-align:center">Mô tả</th> --}}
                     <th style="text-align:center">Created at</th>
                     <th style="text-align:center">Updated at</th>
                     <th style="text-align:center">Action</th>
                 </tr>
             </thead>
             <tbody>
                 @if(count($list)<=0) khong co du lieu @else @foreach($list as $user) {{-- lây tung phan tu ra, key la vi tri--}} <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td style="text-align:center">{{$user->created_at}}</td>
                     <td style="text-align:center">{{$user->updated_at}}</td>
                     <td style="text-align:center" class="d-flex-inline col-md-3">
                         <a style="display: inline-block; width: 67px;" href="{{route('users.show', $user['id'])}}" class="btn btn-sm btn-info">Show</a>
                         {{-- <a style="display: inline-block; width: 67px;" href="{{asset('users')}}/{{$user['id']}}" class="btn btn-sm btn-default">Show2</a> --}}
                         <a style="display: inline-block; width: 67px;" href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning">Edit</a>
                         <form style="display: inline-block;" action="{{route('users.destroy', $user->id)}}" method="post" accept-charset="utf-8">
                             @csrf
                             {{method_field('DELETE')}}
                             <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                         </form>
                     </td>
                     </tr>
                     @endforeach
                     @endif
             </tbody>
         </table>
     </div>
 </div>
 @endsection