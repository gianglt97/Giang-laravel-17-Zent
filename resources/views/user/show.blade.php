@extends('layouts.master')
@section('content')
<div class="container">
    <form role="form">
        <div class="form-group">
            <h2><b>{{$user->name}}</b></h2>
        </div>
        <h5>Email: {{$user->email}}</h5>
        <h5>Giới tính: @if($user->gender == 0) Nam
            @elseif($user->gender ==1) Nữ
            @elseif($user->gender ==2) Không xác định
            @endif
        </h5>
        <h5>Ngày tạo: {{$user->created_at}}</h5>
        <div class="form-group">
            <div class="">
                <a href="{{ route('users.index') }}" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </form>
</div>
@endsection


{{-- giao diện show detail --}}