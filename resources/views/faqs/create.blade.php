@extends('layout')
@section('head')
    <link rel="stylesheet" href="..\css\postfeed.css">
    @endsection
@section('header')

@endsection
@section('content')

    <h1>Create FAQ</h1>

        <form method="POST" action="/faqs">
            @csrf
            <label for="question">Question</label><br>
            <input type="text" id="question" name="question"><br>

            <label for="answer">Answer</label><br>
            <textarea class="textarea" name="answer" id="answer"></textarea><br>

            <label for="link">Link</label><br>
            <input type="text" name="link" id="link" value="tab-">

            <input type="submit" value="Submit">
        </form>

@endsection
