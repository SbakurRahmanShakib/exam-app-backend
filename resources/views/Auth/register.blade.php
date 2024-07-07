@extends('Layouts.master')


@section('content')
<form action="{{route('register')}}" method="POST">
    @csrf
   <h1>Register Form</h1>
    <div class="form-group-custome">
        <lable>Frist Name</lable>
        <input classs="from-controll-custome" type="text" name="f_name" placeholder="frist name">
    
       </div>

       <div class="form-group-custome">
        <lable>Last Name</lable>
        <input classs="from-controll-custome" type="text" name="l_name" placeholder="last name">
    
       </div>
       <div class="form-group-custome">
        <lable>Email</lable>
        <input classs="from-controll-custome" type="email" name="email" placeholder="email">
    
       </div>
       <div class="form-group-custome">
        <lable>Phone Number</lable>
        <input classs="from-controll-custome" type="number" name="phone" placeholder="phone number">
    
       </div>
       <div class="form-group-custome">
        <lable>Password</lable>
        <input classs="from-controll-custome" type="password" name="password" placeholder="passwoed">
    
       </div>
       <button>Submit </button>
  </form>
@endsection