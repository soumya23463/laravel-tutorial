<h1>
    Welcome to Laravel 11
</h1>

{{ 5 * 5 }}
{{ 5 + 5 }}
{{ 5 - 5 }}
{{ 5 / 5 }}
{{ 5 % 2 }}
{{ 5 ** 2 }}
{{ 5 == 5 }}
{{ 5 === 5 }}
{{ 5 != 5 }}
{{ 5 !== 5 }}
{{ 5 > 5 }}
{{ 5 < 5 }}
{{ 5 >= 5 }}
{{ 5 <= 5 }}

{{ "Hello World" }}

{{--  {!!"<script>alert('dfgdf')</script>"!!}  --}}

<br>
@php
    $name = "John Doe";
    $age = 30;
    $isAdmin = true;
    $user = [
        'name' => 'John Doe',
        'age' => 30,
        'isAdmin' => true,
    ];
@endphp
{{ $name }}
{{ $age }}
{{ $isAdmin }}
{{ $user['name'] }}
{{ $user['age'] }}
{{ $user['isAdmin'] }}

@php
    $array = [1, 2, 3, 4, 5];
    $user="John Doe";
@endphp
<br><br>
<ul>
@foreach ($array as $item)
    {{--  <li>{{ $loop->index }}:{{ $item }}</li>  --}}
    @if($loop->first)
        <li>First:{{ $item }}</li>
    @elseif($loop->last)
        <li>Last:{{ $item }}</li>
    @else
        <li>Middle:{{ $item }}</li>
    @endif

@endforeach
</ul>
<br><br>
@{{ $user }}

