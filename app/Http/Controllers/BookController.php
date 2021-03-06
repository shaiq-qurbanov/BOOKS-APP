<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Book;

class BookController extends Controller
{

       public function save(Request $request)
    {
       $date = Carbon::now(); 
       $data = $request->all();
       $book = new Book();
       if (!empty($data)) {
        // \Log::info($data['name']);
        $book->firstname = $data['name'];
        $book->lastname = $data['lname'];
        $book->email = $data['email'];
        $book->created_at = $date;
        $book->save();
       }

       return response()->json($data);
    }    

    public function show(Book $book)
    {
        $per_page=5;
       $books = $book->select(['id','firstname','lastname','email'])->paginate($per_page);
       return view('welcome',compact('books'));
    }
    
    
    
    public function delete(Request $request,Book $book)
    {
        $data = $request->id;
        \Log::info($data);   
        return $book->where('id', $data)->delete();     
    } 

    
    public function update(Request $request,Book $book)
    {
        $responce = false; 
        $date = Carbon::now(); 
        $data = $request->all();
         if(!empty($data)) { 
        $id = $data['id']; 
        $firstname =  $data['name'];   
        $lastname = $data['lname'];         
        $email = $data['email'];
        $updated_at = $date;        
        $responce = $book->where('id', $id)->update(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email]);         
         $book->refresh();
    }
  
    return response()->json($responce);
}


 
    
}

