@extends('layout')

@section('header')
    <head>
        <link rel="stylesheet" href=".\css\faq.css">
        <title>FAQ</title>
    </head>
@endsection
@section('content')
    <div class="wrapper">
        <h6>FAQ</h6>

        @foreach($faq as $faqs)
            <div>
                <input type="radio" id={{$faqs->link}} name="tabs">
                <label for={{$faqs->link}}><div>{{$faqs->question}}</div>
                    <div class="cross"></div></label>
                <div class="content">{{$faqs->answer}}<a href="/faq/{{$faqs->id}}">click to page</a></div>
            </div>
        @endforeach
    </div>
@endsection
