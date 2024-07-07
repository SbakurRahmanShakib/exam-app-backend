@extends('layouts.master')

@section('content')

<form action="{{route('student.store')}}" method="POST">
    @csrf
    <a href="{{route('home')}}">Home</a>
    <div>
        <lable>Name</lable>
        <input type="text" name="s_name" >
    </div>
    <div>
        <lable>Email</lable>
        <input type="email" name="email" >
    </div>
    <div>
        <lable>Phone</lable>
        <input type="number" name="phone" >
    </div>
    <div>
        <lable>Address</lable>
        <textarea type="text" name="address" ></textarea>
    </div>
    <button>Create Student</button>
</form>

@endsection