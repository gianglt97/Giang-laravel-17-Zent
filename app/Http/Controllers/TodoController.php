<?php

namespace App\Http\Controllers;

date_default_timezone_set("Asia/Ho_Chi_Minh");
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $todoObj = new Todo();
        $list = $todoObj->index();
        return view('todo.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
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
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');
        // dump($title);
        // dump($content);
        // dump($status);
        // dd();  vao attribute or original xem

        // Lưu dữ liệu vào đối tượng $todo
        $todo = new Todo();
        $todo->user_id = rand(1000, 99999999);
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;
        // print_r($todo);
        // dd();
        $todo->save();
        // Chuyển hướng về trang danh sách
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = new Todo();
        $item = $item->findById($id);
        // var_dump($item);
        // dd();
        return view('todo.show')->with('item', $item);
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
        $item = new Todo();
        $item = $item->findById($id);
        // var_dump($item);
        // dd();
        return view('todo.edit')->with('item', $item);
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
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');

        // Tìm todo tương ứng với id
        $todo = new Todo();
        $todo = $todo->findById($id);
        // dd($todo);
        //Cập nhật dữ liệu mới
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;
        // Lưu dữ liệu
        $todo->save();
        //Chuyển hướng đến trang danh sách
        return redirect()->route('todos.index');
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
        Todo::destroy($id);
        // Chuyển hướng về trang danh sách
        return redirect()->route('todos.index');
    }
}