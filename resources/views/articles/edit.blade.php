@extends('layout')
@section('head')
<link rel="stylesheet" href="/css/postfeed.css">
@endsection
@section('header')

@endsection
@section('content')

        <h1>Update Article</h1>

    <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{$article->title}}"><br>

        <label for="excerpt">Excerpt</label><br>
        <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea><br>

        <label for="body">Body</label><br>
        <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea><br>

        <label for="class">Class</label><br>
        <input type="text" name="class" id="class" value="{{$article->class}}">

        <input type="submit" value="Submit">
    </form>
        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
@endsection

