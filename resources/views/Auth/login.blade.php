@extends('layouts.master')

@section('content')



<form action="{{route('post-login')}}" method="POST">
    @csrf
    <h1>Login Page</h1>
    <div>
     <lable>Email</lable>
     <input type="email" name="email" placeholder="email" >
    </div>
    <div>
        <lable>Password</lable>
        <input type="password" name="password" placeholder="password">
       </div>
       <button>Sign In</button>
</form>
@endsection