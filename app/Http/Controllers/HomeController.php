<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Home page';
    }

    public function page($page = 1) {
        if ($page==1) {
            return "Mot";
        } else {
            return "page: $page";
        }

    }

}
