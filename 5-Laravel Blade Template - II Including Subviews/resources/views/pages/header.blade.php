{{--  <h1>Header Page</h1>
<h1>{{ $title }}</h1>
@foreach ($fruits as $fruit=>$value)
    <h1>{{ $fruit }}-{{ $value }}:{{ $loop->iteration }}</h1>
@endforeach  --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
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
