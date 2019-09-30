 @php
    // session_start();
    // $list = $_SESSION['list'];
 @endphp

@extends('layouts.master') {{-- Mình phải extends là file master để có thể nhét content vào--}}
@section('content')  {{--khởi tạo section content --}}
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
                    <th>Mô tả</th>
                    <th style="text-align:center">Created at</th>
                    <th style="text-align:center">Updated at</th>
                    <th style="text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($list)<=0)
                    khong co du lieu
                @else
                    @foreach($list as $key => $item) {{-- lây tung phan tu ra, key la vi tri--}}
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['info']}}</td>
                            <td style="text-align:center">{{date('d-m-Y', $item['createdAt'])}}</td>
                            <td style="text-align:center">{{date('d-m-Y', $item['updatedAt'])}}</td>
                            <td style="text-align:center">
                                <a style="display: inline-block; width: 67px;" href="{{route('todos.show', $key+1)}}" class="btn btn-sm btn-info">Show</a>
                                <a style="display: inline-block; width: 67px;" href="{{asset('todos')}}/{{$key+1}}" class="btn btn-sm btn-default">Show2</a>
                                <a style="display: inline-block; width: 67px;" href="{{route('todos.edit', $key+1)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                    @csrf
                                    {{method_field('delete')}}
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
