<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website - @yield('title','webiste page')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Website</h1>
        </header>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('post') }}">Post</a>
        </nav>
        <main>
            <article>
                @hasSection('content')
                    @yield('content')
                @else
               <H2>no content found</H2>
                @endif
                {{--  @yield('content','website content')  --}}
            </article>
            <aside>
                @section('sidebar')
                    <ul>
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('about')}}">About</a></li>
                        <li><a href="{{ route('post')}}">Post</a></li>
                    </ul>
                @show

            </aside>
        </main>
        <footer>
            &copy; website copyright 2025.
        </footer>
        </div>
        @stack('scripts')
        </body>
        </html>


