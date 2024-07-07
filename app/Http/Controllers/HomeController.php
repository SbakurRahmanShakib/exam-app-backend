<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {  

       $data= Student::all();

       return view('index',compact('data'));
    }


    public function apiIndex()
    {
        $data = Student::all();
      if($data){
        return response()->json($data, 200);
        }
        return response()->json(['message' => 'No data found'], 404);
    }
}
