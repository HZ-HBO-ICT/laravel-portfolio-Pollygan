@extends('layout')
@section('head')
    <link rel="stylesheet" href="/css/postfeed.css">
@endsection
@section('header')

@endsection
@section('content')

    <h1>{{$faq->question}}</h1>
    <p class="text">{{$faq->answer}}</p>

@endsection
