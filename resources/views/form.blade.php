<html>
    <form method="post" action="{{route('post.form')}}">
        <label>Tên</label>
        {{csrf_field()}}
        <input type="text" name="name">
        <a href="#">User 1</a>

        <a href="{{route('admin.users.edit')}}">edit user</a>
        <button type="submit">Submit</button>
    </form>
</html>

<!-- <a href="{{ route('users', [
            'id' => 2
            ], false
            ) }}">User 1</a> -->