<h1>
    Welcome to Laravel 11

</h1>

<br>
{{--  <a href="/about/1">About</a>  --}}

{{--  <a href="{{ route('about', ['id' => 1]) }}">About</a>  --}}

<a href="{{ route('about', ['id' => 1, 'commentId' => 5]) }}">About</a>

