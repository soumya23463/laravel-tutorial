{{--  {{ !empty($title) : "No content found" }}  --}}
<br>
{{--  {{ $description }}
<br>
{{ $keywords }}  --}}
{{--  {!! $script !!}  --}}


@foreach ($user as $key=> $value)
    <h1>{{ $key }}</h1>
    <p>{{ $value['name'] }} || {{ $value['email'] }} || {{ $value['age'] }} ||
        <a href="{{ route('view.user', ['id' => $key]) }}">View</a>
    </p>
    <br>

@endforeach
