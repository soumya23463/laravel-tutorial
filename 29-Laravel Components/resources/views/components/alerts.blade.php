{{--  <div class="alert alert-{{ $type }}" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  --}}

{{--  <div class="alert alert-{{ $validType }}" {{ $attributes }} role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  --}}

<div {{ $attributes->merge(['class'=>'alert alert-'.$validType,'role'=>'alert']) }}>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

