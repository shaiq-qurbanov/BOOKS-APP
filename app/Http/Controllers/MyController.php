<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test()
    {
        return view('layouts.layout');
    }
}