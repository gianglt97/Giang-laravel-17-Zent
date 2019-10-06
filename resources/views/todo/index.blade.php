 @php
 // session_start();
 // $list = $_SESSION['list'];
 @endphp

 @extends('layouts.master') {{-- Mình phải extends là file master để có thể nhét content vào--}}
 @section('content') {{--khởi tạo section content --}}
 <div class="container">
     <h3>Danh sách việc cần làm</h3>
     <br>
     <a href="{{route('todos.create')}}" class="btn btn-sm btn-success">Add</a>
     <br>
     <br>
     <div class="table-responsive">
         <table class="table table-hover">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Todo</th>
                     <th style="text-align:center">Status</th>
                     {{-- <th style="text-align:center">Mô tả</th> --}}
                     <th style="text-align:center">Created at</th>
                     <th style="text-align:center">Updated at</th>
                     <th style="text-align:center">Action</th>
                 </tr>
             </thead>
             <tbody>
                 @if(count($list)<=0) khong co du lieu @else @foreach($list as $item) {{-- lây tung phan tu ra, key la vi tri--}} <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->title}}</td>
                     <td style="text-align:center">{{$item->status}}</td>
                     {{-- <td  class="col-md-5">{{$item->content}}</td> --}}
                     <td style="text-align:center">{{$item->created_at}}</td>
                     <td style="text-align:center">{{$item->updated_at}}</td>

                     {{-- <td>{{$item['id']}}</td>
                     <td>{{$item['title']}}</td>
                     <td>{{$item['status']}}</td>
                     <td class="col-md-5">{{$item['content']}}</td>
                     <td style="text-align:center">{{$item['created_at']}}</td>
                     <td style="text-align:center">{{$item['updated_at']}}</td> --}}
                     <td style="text-align:center" class="d-flex-inline col-md-3">
                         <a style="display: inline-block; width: 67px;" href="{{route('todos.show', $item['id'])}}" class="btn btn-sm btn-info">Show</a>
                         {{-- <a style="display: inline-block; width: 67px;" href="{{asset('todos')}}/{{$item['id']}}" class="btn btn-sm btn-default">Show2</a> --}}
                         <a style="display: inline-block; width: 67px;" href="{{route('todos.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                         <form style="display: inline-block;" action="{{route('todos.destroy', $item->id)}}" method="post" accept-charset="utf-8">
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