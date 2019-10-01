<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    public function index() {
        return Todo::get();
        // return view('todo.index')->with('list', $list);
    }

    public function show($id)
    {
        $item = Todo::find($id);
        return view('todo.show')->with('item', $item);
    }

    // public function show($id)
    // {
    //     $item = Todo::where('id', $id)->first();
    //     return view('todo.show')->with('item', $item);
    // }

}
