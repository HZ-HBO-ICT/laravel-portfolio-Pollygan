@extends('layout')
<head>
    <link rel="stylesheet" href=".\css\style.css">
    <title>Home page</title>
</head>
@section('sidebar')
    <!--Side bar-->
    <input type="checkbox" id="check">
    <label for="check">
        <i ><img src="..\pictures\sidebar3.png" alt="Side bar" id="btn"></i>
        <i id="cancel"></i>
    </label>

    <div class="sidebar">
        <h3>Info</h3>
        <ul class="side">
            <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" target="_blank">CER-ICT</a></li>
            <li><a href="IR-ICT-2021-2022.pdf" target="_blank">IR-ICT</a></li>
            <li><a href="https://glaze-donut-5a5.notion.site/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4" target="_blank">Learning envi.</a></li>
            <li><a href="https://teams.microsoft.com/_?culture=bg-bg&country=BG&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/conversations/Общи?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel" target="_blank">Teams-ICT</a></li>
            <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Study Progress</a></li>
            <li><a href="https://github.com/Pollygan/username.github.io.git" target="_blank">Github SP</a></li>
        </ul>
    </div>

    <h1><a href="/portfolio" class="port">Paolina Ganeva</a></h1>
@endsection

@section('content')
        <!--Navbar-->

    <span>
        <p class="bubbletext"> Hello there! My name is Paolina,I'm 19 years old and I'm from Bulgaria.I began my journey since 15 year old by going to a school with an ICT program. There I learned the history of the computers, also learned how to work with Microsoft appliences like Excel and Word. Followed by the basics of HTML,CSS and C#. I've perticipated in a lot of school projects like "Coding week". Since a teenager I was very interested in computers "How they work?", "How can i change it to be better?" ect., from there I wanted to be able to make that change and improve tehnologies, that grew on me as a dream to become a web developer or web designer.I wanted  this dream to come true as I was doing this program and participating in all the projects, I  even started to do online courses.Now continuing that dream I'am more ambitious than ever.</p>
      </span>
    <a href="https://www.socialmediatoday.com/news/8-of-the-most-important-html-tags-for-seo/574987/">
        <img src="..\pictures\me.JPG" alt="Profile picture" class="pic"></a>

    <!--Social media-->

    <ul class="social">
        <li><img src="..\logo-instagram.svg" alt="Instagram" class="instagram"> : @ganevaa.p</li>
        <br>
        <li><img src="..\logo-facebook.svg" alt="Facebook" class="facebook">  : Паолина Ганева</li>
        <br>
        <li><img src="..\logo-linkedin.svg" alt="Linkedin" class="linkedin">  : Paolina Ganeva</li>
    </ul>

    <img src="..\pictures\pic.jpg" alt="Old school photo" class="pic1">
@endsection
@section('footer')
        <p id="bubbletext">ICT program fits perfectly with my expectations. Continuing with the studies I can now learn all the knowladge for my fututyre job.The best thing about Hz and the program is that here are a lot of international students that means you could meet people from all over the world. Here while learning you get the chance to practice and put this knowladge in projects, and I  think that's how you'll learn the best. This program meets my excpectations by having also IT buissnes because rather than just making sites or programs you have to know how to sell your stuff. I came here to make my dream come true and so I will.</p>
        <ul class="articles">
            <li class="article">
                @foreach($articles as $post)
                    <h6>
                        <a href="/post-feed">{{$post-> title}}</a>
                    </h6>
                <p>{{$post->excerpt}}</p>
            </li>
            @endforeach
        </ul>
        <img src="..\pictures\hz.png" alt="Hz logo" class="hz">
@endsection
