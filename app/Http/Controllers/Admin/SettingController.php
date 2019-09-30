<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index() {
        return "Setting page";
    }
    public function show($id) {
        if($id>10) {
            $result = 'Lon hon 10';
        }else {
            $result = 'Nho hon bang 10';
        }
        // return view('welcome')->with('result',$result);
        return view('welcome')
        ->with([
            'result'=>$result,
            'id'=>$id
        ]);
    }
}
