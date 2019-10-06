@extends('layouts.master')
@section('content')
<div class="container">
    <form action="{{route('users.store')}}" method="POST" class="" role="form">
        @csrf
        <div class="form-group">
            <legend>Add user</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Email:</label>
            <input name="email" id="email" class="form-control" placeholder="Enter email">
        </div>
         <div class="form-group">
            <label class="control-label" for="user">Password:</label>
            <input type="password" name="password" id="password" maxlength="6" class="form-control" placeholder="Enter password">
            <input type="checkbox" onclick="showPassword()">Show Password
        </div>
        <div class="form-group">
            <label class="control-label" for="user">Giới tính:</label>
                <select name="gender" class="form-control">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                    <option value="2">Không xác định</option>
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

<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
