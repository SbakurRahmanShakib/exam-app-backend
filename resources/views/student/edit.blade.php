@extends('layouts.master')

@section('content')

<form action="{{route('student.update',$data->id)}}" method="POST">
    @csrf
    @method('put')
 
    <a href="{{route('home')}}">Home</a>
    <div>
        <lable>Name</lable>
        <input type="text" name="s_name" value="{{$data->s_name}}" >
    </div>
    <div>
        <lable>Email</lable>
        <input type="email" name="email" value="{{$data->email}}" >
    </div>
    <div>
        <lable>Phone</lable>
        <input type="number" name="phone" value="{{$data->phone}}" >
    </div>
    <div>
        <lable>Address</lable>
        <textarea type="text" name="address" >{{$data->address}}</textarea>
    </div>
    <button>Update Student</button>
</form>

@endsection