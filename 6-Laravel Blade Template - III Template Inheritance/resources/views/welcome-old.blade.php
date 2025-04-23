@php
    $title = 'Welcome';
    $fruits = ['1'=>'apple','2'=>'banana', '3'=>'orange'];
    $value="";
@endphp

{{--  @include('pages.header', ['fruits' => $fruits, 'title' => $title])  --}}
{{--  @includeWhen(true,'pages.header', ['fruits' => $fruits, 'title' => $title])  --}}

{{--  @includeUnless(false,'pages.header', ['fruits' => $fruits, 'title' => $title])  --}}

@includeWhen(empty($value),'pages.header', ['fruits' => $fruits, 'title' => $title])

<h1>Home page</h1>

@include('pages.footer',['title'=>'Footer'])

@includeIf('pages.content')
