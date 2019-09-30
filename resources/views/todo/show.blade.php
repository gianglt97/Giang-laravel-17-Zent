@extends('layouts.master')
@section('content')
<div class="container">
    <form action="{{route('todos.store')}}" method="POST" class="" role="form">
        @csrf
        <div class="form-group">
            <legend> Todo Detail</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Todo:</label>
            <input name="name" type="text" class="form-control disable" id="name" value="{{$todo['name']}}">
            <input name="id" type="text" class="form-control hidden" id="id" value="{{$id}}">

        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="info" id="info" class="form-control disable" value="{{$todo['info']}}"></textarea>
        </div>


        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection


{{-- giao diện show detail --}}