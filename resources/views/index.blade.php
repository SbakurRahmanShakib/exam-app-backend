<h5>This is index page</h5>
<div>
    <a href="{{route('student.create')}}">Create Student</a>
    <a href="/all-exam">All Exam</a>
</div>

<a  href="{{route('logout')}}">logout</a>



<div>
    
<table style="margin: 10px; padding:10px">
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach($data as $student)
        <tr>
            <th>{{$student->s_name}}</th>
            <th>{{$student->email}}</th>
            <th>{{$student->phone}}</th>
            <th>{{$student->address}}</th>
            <th> <a href="{{ route('student.show',$student->id) }}">edit</a>  
             <form action="{{route('student.destroy',$student->id) }}" method="POST">
                @csrf
                @method('delete')
                <button>delete</button>
             </form>
            
            </th>
           
        </tr>
        @endforeach
    </tbody>
</table>
</div>