@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="..\css\postfeed.css">
@endsection
@section('header')

@endsection
@section('content')
    <h1>New Article</h1>

    <form method="POST" action="/articles">
        @csrf
        <label for="title">Title</label><br>
        <input
            class="input @error('title') is-danger @enderror"
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}">

        @error('title')
        <p class="help is-danger">{{$errors->first('title')}}</p>
        @enderror
        <br>

        <label for="excerpt">Excerpt</label><br>
        <textarea
            class="textarea @error('excerpt') is-danger @enderror"
            name="excerpt"
            id="excerpt"
            >{{ old('excerpt') }}</textarea>

        @error('excerpt')
        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
        @enderror
        <br>

        <label for="body">Body</label><br>
        <textarea
            class="textarea @error('body') is-danger @enderror"
            name="body"
            id="body"
        >{{ old('body') }}</textarea>

        @error('body')
        <p class="help is-danger">{{ $errors->first('body') }}</p>
        @enderror
        <br>

        <label for="class">Class</label><br>
        <input type="text" name="class" id="class" value="pe">

        <input type="submit" value="Submit">
    </form>

@endsection



