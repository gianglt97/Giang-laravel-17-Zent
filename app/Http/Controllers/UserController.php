<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

date_default_timezone_set("Asia/Ho_Chi_Minh");

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $userObj = new User();
        $list = $userObj->index();
        return view('user.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = request()->all();   // get all du lieu (token, method,..)
        // dd($data);  //dump and die

        // Nhận dữ liệu từ $request
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        $gender = $request->get('gender');
        // dump($name);
        // dump($email);
        // dump($password);
        // dd();  vao attribute or original xem

        // Lưu dữ liệu vào đối tượng $user
        $user = new User();
        $user->id = rand(201,301);
        $user->name = $name;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->gender = $gender;
        // print_r($user);
        // dd();
        $user->save();
        // Chuyển hướng về trang danh sách
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = new User();
        $user = $user->findById($id);
        // var_dump($user);
        // dd();
        return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $user = new User();
        $user = $user->findById($id);
        // var_dump($user);
        // dd();
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Nhận dữ liệu từ $request
        $name = $request->get('name');
        $email = $request->get('email');
        $gender = $request->get('gender');

        // Tìm user tương ứng với id
        $user = new User();
        $user = $user->findById($id);
        // dd($user);
        //Cập nhật dữ liệu mới
        $user->name = $name;
        $user->email = $email;
        $user->gender = $gender;
        // Lưu dữ liệu
        $user->save();
        //Chuyển hướng đến trang danh sách
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);

        // Xoá với id tương ứng
        user::destroy($id);
        // Chuyển hướng về trang danh sách
        return redirect()->route('users.index');
    }
}
