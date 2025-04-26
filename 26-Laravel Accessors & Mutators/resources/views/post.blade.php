<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posts Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Posts</h5>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="table-light">
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)


          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td><a href="{{ route('update.post'),$post->id }}" class="btn btn-sm btn-primary">Update</a></td>
            <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
          </tr>
          @endforeach
          <!-- More rows here -->
        </tbody>
      </table>
      <a href="#" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>

</body>
</html>
