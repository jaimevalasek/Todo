<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('todo');
    }

    public function form()
    {
        return view('form');
    }
}
