<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Client;

class ClientController extends Controller
{   
    public function index(Client $client)
    {
      $arr = 'test';
    $per_page = 5;
    $clients = $client->select(['id', 'country', 'city', 'street'])->paginate($per_page);    
    return view('client',compact('clients'));
    }

public function save(Request $request)
{
  $date = Carbon::now();
  $data = $request->all();
  $client = new Client();
  \Log::info($data); 
  if(!empty($data)){  
  $client->country = $data['country'];
  $client->city = $data['city'];
  $client->street = $data['street'];
  $client->created_at = $date;
   dump($data);
  $client->save();
  }
    return response()->json($data);

}
 public function create(Request $request)
{
 $data = $request->all();
 return response()->json($data);

}


}
