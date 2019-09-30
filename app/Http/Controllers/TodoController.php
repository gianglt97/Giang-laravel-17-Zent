<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $list = array(
        array(
            "name" => 'hoc lap trinh',
            "info" => 'hoc lap trinh',
            "createdAt" => 1569637443,
            "updatedAt" => 1569637443
        ),
        array(
            "name" => 'hoc HTML',
            "info" => 'hoc HTML',
            "createdAt" => 1569637443,
            "updatedAt" => 1569637443
        ),
        array(
            "name" => 'hoc CSS',
            "info" => 'hoc CSS',
            "createdAt" => 1569637443,
            "updatedAt" => 1569637443
        ),
        array(
            "name" => 'hoc nodejs',
            "info" => 'hoc nodejs',
            "createdAt" => 1569637443,
            "updatedAt" => 1569637443
        )
    );

    public function index()
    {
        return view('todo.index')->with('list', $this->list);
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
        $data['name'] = request()->input('name');
        $data['info'] = request()->input('info');
        $data['createdAt'] = time();
        $data['updatedAt'] = time();

        array_push($this->list, $data);
        // print_r($this->list);
        return view('todo.index')->with('list', $this->list);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('todo.show', $id);
        return "show " .$id;
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
        return view('todo.edit')->with('id', $id);
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
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "destroy";
    }
}
