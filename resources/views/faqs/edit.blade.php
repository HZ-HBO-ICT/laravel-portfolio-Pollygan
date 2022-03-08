@extends('layout')
@section('head')
    <link rel="stylesheet" href="/css/postfeed.css">
@endsection
@section('header')

@endsection
@section('content')
    <h1>Update FAQ</h1>

    <form method="POST" action="/faqs/{{$faq->id}}">
        @csrf
        @method('PUT')
        <label for="question">Question</label><br>
        <input type="text" id="question" name="question" value="{{$faq->question}}"><br>

        <label for="answer">Answer</label><br>
        <textarea class="textarea" name="answer" id="answer">{{$faq->answer}}</textarea><br>

        <label for="link">Link</label><br>
        <input type="text" name="link" id="link" value="{{$faq->link}}">

        <input type="submit" value="Submit">
    </form>
    <form method="POST" action="/faqs/{{$faq->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
