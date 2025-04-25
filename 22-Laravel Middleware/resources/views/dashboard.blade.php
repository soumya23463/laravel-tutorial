<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap Buttons</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <p>Your email: {{ Auth::user()->email }}</p>
    <p>Your ID: {{ Auth::user()->id }}</p>

    <a type="button" href="{{ route('inner') }}" class="btn btn-primary me-2">Inner Page</a>
    <a type="button" href="{{ route('logout') }}" class="btn btn-success">Logout</a>

    </body>
</html>
