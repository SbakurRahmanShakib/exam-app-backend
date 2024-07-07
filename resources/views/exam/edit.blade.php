@extends('layouts.master')

@section('content')
   
  <form action action="/update-exam/{{$exam->id}}" method="POST">
    @csrf
    <div>
        <lable>student</lable>
        <select name="student_id">
            @foreach($student as $student_data)
            <option value="{{$student_data->id}}" @if($student_data->id === $exam->student_id) selected @endif>{{$student_data->s_name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <lable>Subject</lable>
        <input type="text" name="subject" value="{{$exam->subject}}">
    </div>
    <div>
        <lable>Score</lable>
        <input type="text" name="score" value="{{$exam->score}}" >
    </div>
    <div>
        <lable>Exam Date</lable>
        <input type="date" name="exam_date" value="{{ $exam->exam_date }}">
    </div>

    <button>Update</button>
  </form>
 
@endsection