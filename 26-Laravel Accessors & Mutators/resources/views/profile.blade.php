<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card mx-auto" style="max-width: 500px;">
    <div class="card-header">
      <h5 class="mb-0">Profile</h5>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label class="form-label fw-bold">Name</label>
        <div class="form-control-plaintext"> <!-- You can replace this with actual data or inputs -->
            {{ $user->name }}
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Email</label>
        <div class="form-control-plaintext">
          {{ $user->email }}
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Age</label>
        <div class="form-control-plaintext">
            {{ $user->age }}
        </div>
      </div>
      <a href="#" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>

</body>
</html>
