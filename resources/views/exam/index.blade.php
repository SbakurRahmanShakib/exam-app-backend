@extends('layouts.master')

@section('content')


<table>
  
    <thead>
        <tr>  <th colspan="5">Student Exam List <a href="/exams">Create Exam</a><a href="{{route('home')}}">Home</a></th></tr>
       
        <tr>
          
            <th>Student Name</th>
            <th>Subject</th>
            <th>Score</th>
            <th>Exam Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $exam)
        <tr>
            <th>{{$exam?->student?->s_name}}</th>
            <th>{{$exam?->subject}}</th>
            <th>{{$exam?->score}}</th>
            <th>{{$exam?->exam_date}}</th>
            <th><a href="show-exam/{{$exam->id}}">Edit</a></th>
            <th><a href="/exam-delete/{{$exam->id}}">Delete</a></th>
        </tr>
       @endforeach 
    </tbody>
</table>

@endsection