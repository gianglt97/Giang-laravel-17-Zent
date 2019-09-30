@extends('layouts.master')
@section('content')
<div class="container">
    <form action="{{route('todos.store')}}" method="POST" class="" role="form">
        @csrf
        <div class="form-group">
            <legend>Add todo</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Todo:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter todo">
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="info" id="info" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection


{{-- Giao dien trang create --}}