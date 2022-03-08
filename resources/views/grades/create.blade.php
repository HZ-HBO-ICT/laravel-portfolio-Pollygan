@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="..\css\dashboard.css">
    <title>Create grades</title>
@endsection
@section('header')

@endsection
@section('content')
    <h1>Add a new grade</h1>
    <form method="POST" action="/grades">
        @csrf
        <label for="course_name">Course</label><br>
        <input
            type="text @error('course_name') is-danger @enderror"
            id="course_name"
            name="course_name"
            value="{{old('course_name')}}">
        @error('course_name')
        <p class="help is-danger">{{$errors->first('course_name')}}</p>
        @enderror
        <br>

        <label for="EC">EC</label><br>
        <input
            type="text @error('EC') is-danger @enderror"
            id="EC"
            name="EC"
            value="{{old('EC')}}">
        @error('EC')
        <p class="help is-danger">{{$errors->first('EC')}}</p>
        @enderror
        <br>

        <label for="test_name">Exam type</label><br>
        <input
            type="text @error('test_name') is-danger @enderror"
            id="test_name"
            name="test_name"
            value="{{old('test_name')}}">
        @error('test_name')
        <p class="help is-danger">{{$errors->first('test_name')}}</p>
        @enderror
        <br>

        <label for="best_grade">Grade</label><br>
        <input
            type="text @error('best_grade') is-danger @enderror"
            id="best_grade"
            name="best_grade"
            value="{{old('best_grade')}}">
        @error('best_grade')
        <p class="help is-danger">{{$errors->first('best_grade')}}</p>
        @enderror
        <br>

        <input type="submit" value="Submit">
    </form>

@endsection
