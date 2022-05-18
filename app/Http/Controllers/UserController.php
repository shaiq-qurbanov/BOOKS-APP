<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $message = 'username';
        return view('user')->with('message',$message);
    }
}
