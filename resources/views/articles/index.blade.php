@extends('layout')
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="..\css\postfeed.css">
</head>
@section('header')

@endsection
@section('content')
<body>
<!--Article 1-->

<div class="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">

            <img src=".\pictures\blog.jpeg" alt="Me" style="width:550px;height:500px">

        </div>
        <div class="flip-box-back">

            <h2>Why this study choice?</h2>

            <p>Ever since I was little I have wanted to study abroad, fascinated by the beauty of the Netherlands and how good the people are. It got me interested in searching for a university here. I started by going to an exposition about different universities. Hz really caught my eye but it turned out that they didn't have an ICT program in English. A few years went by and I got myself into one of the open days at Hz. At that moment I just knew that this was the place for me by how you applied your studies and got to do so many real world projects and assignments. When I met the people then I understood that the environment was the best option for me too. I saw my future career starting here and all the connections I was going to make here. Those things motivate me. After 4 years I think I’m going to get not only the knowledge I need, but also experiences and friends that will last a lifetime, and maybe even a job. My goal is to become a Web Developer and by choosing this program I think I’m on the right path to achieving that goal. </p>
        </div>
    </div>
</div>

<!--Article 2-->

<div class="flip-box2">
    <div class="flip-box-inner2">
        <div class="flip-box-front2">

            <img src="../pictures/blog2.jpg" alt="SWOT" style="width: 520px;height:320px">

        </div>
        <div class="flip-box-back2">

            <h3>Personality analysis</h3>
            <p class="swot">My strength is that I'm a very organized person. I like to plan out my week to know what I have to do and not to forget something important. I’m also a very optimistic person, and when I set my mind to something I do it no matter what. But on the flip side, when I get to planned out  or overwork myself, I feel lost. One of my weaknesses is that sometimes I get too much in my head doing stuff or multitasking. But there’s always something good in the bad things, when I overwork myself I usually do something to get my mind off of it like running or reading which is good for your well-being. The threat that I have to face on my journey is that I get distracted easily, because I have too many thoughts in my head.</p>
        </div>
    </div>
</div>
<br>
<br>
<!--Article 3-->
@foreach($articles as $article)
<p class="{{$article->class}}"><bold style="font-size: 30px; width: 20px;height: 20px;font-family: 'Alfa Slab One',cursive;">{{$article->title}}</bold>
    <br>
    <br>
    {{$article->excerpt}}<a href="{{ $article->path() }}">click for more</a></p>
@endforeach
</body>
@endsection






