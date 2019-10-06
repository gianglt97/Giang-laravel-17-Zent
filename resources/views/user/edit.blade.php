@extends('layouts.master')
@section('content')
<div class="container">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="" role="form">
        @csrf
        <input name="_method" type="hidden" value="PUT">
            {{-- {{ method_field('PUT') }} --}}
        <div class="form-group">
            <legend>Cập nhật thông tin người dùng</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Name:</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Email:</label>
        <input name="email" id="email" class="form-control" placeholder="Enter email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Giới tính:</label>
                <select name="gender" class="form-control">
                    <option value="0" @if($user->gender == 0) selected @endif>Nam</option>
                    <option value="1" @if($user->gender == 1) selected @endif>Nữ</option>
                    <option value="2" @if($user->gender == 2) selected @endif>Không xác định</option>
                </select>
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection