@extends('layout')
@section('head')
    <title>{{$article->title}}</title>
    <link rel="stylesheet" href="..\css\postfeed.css">
@endsection
@section('header')

@endsection
@section('content')

    <h1>{{$article->title}}</h1>
    <p class="text">{{$article->body}}</p>

@endsection
