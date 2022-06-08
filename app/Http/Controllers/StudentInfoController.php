<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentInfo;
use Carbon\Carbon;

class StudentInfoController extends Controller
{
    public function index(Request $request, Student $student)
    {
        $id = $request->id;        
        $data = $student->with("student_info")->find($id);
        \Log::info($data);
   
        return view('student_info',compact('data'));
    }
    
    public function save(Request $request)
    {
    $date = Carbon::now();
    $data = $request->all();
    $studentinfos = new StudentInfo();
   if(!empty($data)){
        $studentinfos->tel = $data['tel'];
        $studentinfos->login = $data['login'];
        $studentinfos->specialty = $data['specialty'];
        $studentinfos->student_id = $data['id'];
        $studentinfos->created_at = $date;
        $studentinfos->save();
    }
    return response()->json($data);
    }

    public function update(Request $request,StudentInfo $studentinfos)
    {
        $responce = false;
        $date = Carbon::now();
        $data = $request->all();
        if(!empty($data)){
         
            $tel = $data['tel'];
            $login = $data['login'];
            $specialty= $data['specialty'];
            $id = $data['id'];
            $updated_at = $date;
            $responce = $studentinfos->where('student_id',$id)->update(['tel'=>$tel, 'login'=>$login, 'specialty'=>$specialty]);
            \Log::info($data);
            $studentinfos->refresh();
        }

        return response()->json($responce);
    }


  
}
