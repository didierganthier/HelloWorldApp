<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function showHello()
    {
        return view('hello');
    }
}
