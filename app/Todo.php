<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    public function index() {
        // $list = DB::table('todos')->get();
        // dd($list);
        // return $list;
        // return Todo::get();
        return Todo::latest()->get();
        // return view('todo.index')->with('list', $list);
    }

    public function findById($id)
    {
        return Todo::find($id);
    }

    // public function updateById($id)
    // {

    // }

}