<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //

    public function index()
    {
        $data =Exam::with('student')->get();
        return view('exam.index',compact('data'));

       
    }

    public function creteExam()
    {  
       $student = Student::all();

        return view('exam.create',compact('student'));

    }

    public function insertExamRecord(Request $request)
    { 

        $data = [
            $request->student_id,
            $request->subject,
            $request->score,
            Carbon::parse($request->exam_date)->format('Y-m-d')

        ];

        // dd($data);

      
        DB::statement('CALL ExamRecord(?, ?, ?, ?)',$data);

        return redirect('/all-exam');

    }

    public function show($id)
    {
    
        $exam = Exam::with('student')->find($id);
        // dd($exam);
        $student = Student::all();


     
        return view('exam.edit',compact('exam','student'));



    }

    public function examUpdate(Request $request,$id)
    {
         $exam = Exam::find($id);

         $exam->student_id = $request->student_id ??  $exam->student_id;
         $exam->subject    = $request->subject ??     $exam->subject;
         $exam->score      = $request->score  ??      $exam->score;
         $exam->exam_date  = $request->exam_date  ??  $exam->exam_date;

         $exam->save();

         return redirect('/all-exam');



    }

    public function examDelete($id)
    {

        $exam = Exam::find($id);

        $exam->delete();
        return redirect()->back();

    }
}
