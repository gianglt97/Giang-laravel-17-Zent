@extends('layouts.master')
@section('content')
<div class="container">
    <form action="" method="PUT" class="" role="form">
        @csrf
        <div class="form-group">
            <legend>Edit todo</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Todo:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter todo" value="">
            <input name="id" type="text" class="form-control hidden" id="id" value="{{$id}}">
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