<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
</head>
<body>
    <h1>{{ $subject }}</h1>
    <p>{{ $mailMessage }}</p>

    <h2>Detail:</h2>
    {{--  <p><strong>Name:</strong> {{ $detail['name'] ?? '' }}</p>
    <p><strong>Product:</strong> {{ $detail['product'] ?? '' }}</p>
    <p><strong>Price:</strong> {{ $detail['price'] ?? '' }}</p>  --}}

    <p><strong>Name:</strong> {{ $name ?? '' }}</p>
    <p><strong>Product:</strong> {{ $product?? '' }}</p>
    <p><strong>Price:</strong> {{ $price ?? '' }}</p>

</body>
</html>


{{--  {{ $mailMessage }}  --}}
