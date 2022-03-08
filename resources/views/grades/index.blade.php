@extends('layout')
@section('head')
    <link rel="stylesheet" href="..\css\dashboard.css">
    <title>Grades</title>
@endsection
@section('header')

@endsection
@section('content')
   <h1>Grades</h1>

   <table>
       <thead>
       <tr class="solid">
           <th>Course</th>
           <th>EC</th>
           <th>Exam</th>
           <th>Grade</th>
       </tr>
       </thead>
       <tbody>
       <tr class="solid">
           <!--It is usually the folder and the name of the table-->
           @foreach($grades as $grade)
               <td>{{$grade->course_name}}</td>
               <td>{{$grade->EC}}</td>
               <td>{{$grade->test_name}}</td>
               <td>{{$grade->best_grade}}</td>
       </tr>
       @endforeach
       <button><a href="/grades/{{$grade}}">Update</a></button>
       <button formmethod="POST" formaction="/grades/{{$grade->id}}" @csrf @method("DELETE")><a href="/grades/{{$grade}}">Delete</a></button>
       </tbody>
   </table>
@endsection
