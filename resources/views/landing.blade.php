<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Preparedness Escape Room</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light px-4">
    <a class="navbar-brand" href="#">SafeScape</a>
    <a href="{{route('admin.login')}}" class="btn btn-outline-secondary">
      <i class="bi bi-person-circle"></i> Admin
    </a>
  </nav>

  <!-- Landing Page Content -->
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <h1 class="mb-4">Welcome to the Disaster Preparedness Escape Room</h1>
        <p class="lead mb-4">Learn how to stay safe during disasters while having fun!</p>
        <a href="{{route ('student.register')}}" class="btn btn-primary btn-lg mb-2">Student Sign-Up</a>
        <br>
        <a href="{{route ('student.login')}}" class="btn btn-secondary btn-lg">Student Login</a>
      </div>

      <!-- Image Content -->
      <div class="col-md-6 text-center">
        <img src="escape_room_image.jpg" alt="Escape Room Illustration" class="img-fluid">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>