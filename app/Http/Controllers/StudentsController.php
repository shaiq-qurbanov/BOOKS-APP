<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Student;

class StudentsController extends Controller
{
   
    public function save(Request $request)
    {
        $date = Carbon::now();
        $data = $request->all();
        $student = new Student();
        if(!empty($data)) {
            //   \Log::info($data['city']);
            $student->country = $data['country'];
            $student->city = $data['city'];
            $student->street = $data['street'];
            $student->created_at = $date;
            $student->save();
        }
        return response()->json($data);
    }

    public function index(Student $student)
    {
        $per_page = 5;
        $students = $student->select(['id','country','city','street'])->paginate($per_page);
        return view('student',compact('students'));
}


public function update(Request $request,Student $student)
{
    $responce = false;
    $date = Carbon::now();
    $data = $request->all();
    if(!empty($data)){
        $id = $data['id'];
        \Log::info($data['city']);
        $country = $data['country'];
        $city = $data['city'];
        $street = $data['street'];
        $updated_at = $date;
        $responce = $student->where('id',$id)->update(['country'=>$country, 'city'=>$city, 'street'=>$street]);
        $student->refresh();

    }
    return response()->json($responce);
}


public function delete(Request $request, Student $student)
{
    $data = $request->id;
    return $student->where('id',$data)->delete();
}

}
