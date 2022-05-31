<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        \Log::info($id);
        return view('student_info');
    }
}
