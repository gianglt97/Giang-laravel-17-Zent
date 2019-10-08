@extends('layouts.master')
@section('content')
<div class="container">
    <form role="form">
        <div class="form-group">
            <h2><b>{{$item->title}}</b></h2> {{--title --}}
        </div>
        <h5>{{$item->content}}</h5> {{--content --}}
        <div class="form-group">
            <div class="">
                <a href="{{ route('todos.index') }}" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </form>
</div>
@endsection


{{-- giao diện show detail --}}