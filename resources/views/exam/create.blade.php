@extends('layouts.master')

@section('content')
   
  <form action action="/exams" method="POST">
    @csrf
    <div>
        <lable>student</lable>
        <select name="student_id">
            @foreach($student as $student_data)
            <option value="{{$student_data->id}}">{{$student_data->s_name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <lable>Subject</lable>
        <input type="text" name="subject">
    </div>
    <div>
        <lable>Score</lable>
        <input type="text" name="score" >
    </div>
    <div>
        <lable>Exam Date</lable>
        <input type="date" name="exam_date">
    </div>

    <button>Submit</button>
  </form>
 
@endsection