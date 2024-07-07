<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
        // dd($request->all());
        $data=[
            's_name'  => $request->s_name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
        ];
        Student::create($data);
        return redirect()->route('home');

        

        
    }

    public function createStudent(Request $request)
    {
        // dd($request->all());    
        $data=[
            's_name'  => $request->s_name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
        ];
        Student::create($data);
        return response()->json($data); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        $data = $student;
        return view('student.edit',compact('data'));
    }

    public function getStudent($id)
    {
        $data = Student::find($id);
        if($data){
            return response()->json($data, 200);
        }
        return response()->json(['message' => 'No data found'], 404);
    }


    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->s_name = $request->s_name ?? $student->s_name;

        $student->email  = $request->email ?? $student->email;

        $student->phone  = $request->phone ?? $student->phone;
        
        $student->address = $request->address ?? $student->address;

        $student->save();

        return response()->json($student);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
        $student->s_name = $request->s_name ?? $student->s_name;

        $student->email  = $request->email ?? $student->email;

        $student->phone  = $request->phone ?? $student->phone;
        
        $student->address = $request->address ?? $student->address;

        $student->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return redirect()->back();
    }
}
