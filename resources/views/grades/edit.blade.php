@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="..\css\dashboard.css">
    <title>Update grades</title>
@endsection
@section('header')

@endsection
@section('content')
    <h1>Update the grade</h1>
    <form method="POST" action="/grades">
        @csrf
        @method('PUT')
        <label for="course_name">Course</label><br>
        <input type="text"
            id="course_name"
            name="course_name" value="{{$grade->course_name}}">
        <br>

        <label for="EC">EC</label><br>
        <input
            type="text"
            id="EC"
            name="EC"
            value="{{$grade->EC}}">
        <br>

        <label for="test_name">Exam type</label><br>
        <input
            type="text"
            id="test_name"
            name="test_name"
            value="{{$grade->test_name}}">
        <br>

        <label for="best_grade">Grade</label><br>
        <input
            type="text"
            id="best_grade"
            name="best_grade"
            value="{{$grade->best_grade}}">
        <br>

        <input type="submit" value="Submit">
    </form>

@endsection
