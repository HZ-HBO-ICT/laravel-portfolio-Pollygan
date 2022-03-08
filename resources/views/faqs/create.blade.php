@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="..\css\postfeed.css">
    @endsection
@section('header')

@endsection
@section('content')

    <h1>Create FAQ</h1>

        <form method="POST" action="/faqs">
            @csrf
            <label for="question">Question</label><br>
            <input
                class="input @error('question') is-danger @enderror"
                type="text"
                id="question"
                name="question"
                value="{{ old('question') }}">

            @error('question')
            <p class="help is-danger">{{ $errors->first('question') }}</p>
            @enderror
            <br>

            <label for="answer">Answer</label><br>
            <textarea
                class="textarea @error('answer') is-danger @enderror"
                name="answer"
                id="answer"
                >{{ old('answer') }}</textarea>

            @error('answer')
            <p class="help is-danger">{{ $errors->first('answer') }}</p>
            @enderror
            <br>

            <label for="link">Link</label><br>
            <input type="text" name="link" id="link" value="tab-">

            <input type="submit" value="Submit">
        </form>

@endsection
