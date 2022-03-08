<!DOCTYPE html>
<html lang="en">

<head>
@yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">

</head>

<body>
    @yield('header')
    <header class="navbar">

        @if(Request::path() === '/')
            <h1><a href="/portfolio" class="port">Paolina Ganeva</a></h1>
        @else
            <h1 id="name">Paolina Ganeva </h1>
        @endif


        <nav>
<ul>
    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
    <li><a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a></li>
    <li><a class="{{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a></li>
    <li><a class="{{ Request::is('post-feed') ? 'active' : '' }}" href="/post-feed">Post feed</a></li>
</ul>
    </nav>
    @yield('sidebar')
</header>
    <main>
        @yield('content')
    </main>
<footer>
    @yield('footer')
</footer>
</body>

</html>
