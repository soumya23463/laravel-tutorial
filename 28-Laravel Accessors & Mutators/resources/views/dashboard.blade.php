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
    {{--  @if(Gate::allows('isAdmin'))
        <a type="button" href="#" class="btn btn-primary">Admin panel</a>
    @else
        <a type="button" href="#" class="btn btn-secondary">User panel</a>
    @endif  --}}
    {{--  @can('isAdmin')
        <a type="button" href="#" class="btn btn-primary">Admin panel</a>
    @else
        <a type="button" href="#" class="btn btn-secondary">User panel</a>
    @endif  --}}
    @can('isAdmin')
        <a type="button" href="#" class="btn btn-primary">Admin panel</a>
    @else
        <a type="button" href="#" class="btn btn-secondary">User panel</a>
    @endif
       <a type="button" href="{{ route('profile',Auth::id()) }}" class="btn btn-warning">Profile</a>
    <a type="button" href="{{ route('post',Auth::id()) }}" class="btn btn-success">Post</a>
      <a type="button" href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

    </body>
</html>
