@extends('layout')
@section('head')
    <link rel="stylesheet" href="..\css\postfeed.css">
@endsection
@section('header')

@endsection
@section('content')
    <h1>New Article</h1>

    <form method="POST" action="/articles">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="excerpt">Excerpt</label><br>
        <textarea class="textarea" name="excerpt" id="excerpt"></textarea><br>

        <label for="body">Body</label><br>
        <textarea class="textarea" name="body" id="body"></textarea><br>

        <label for="class">Class</label><br>
        <input type="text" name="class" id="class" value="pe">

        <input type="submit" value="Submit">
    </form>

@endsection



