<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar bg-light">
        <h5 class="p-3">SafeScape</h5>
        <ul class="nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.index')}}" class="nav-link ">Home</a></li>
          <li class="nav-item"><a href="{{ route('admin.users')}}" class="nav-link active">Users</a></li>
          <li class="nav-item"><a href="{{ route('admin.sections')}}" class="nav-link">Sections</a></li>
          <li class="nav-item"><a href="{{ route('admin.students')}}" class="nav-link">Students</a></li>
          <li class="nav-item"><a href="{{ route('admin.disasters')}}" class="nav-link">Disasters</a></li>
          <li class="nav-item"><a href="{{ route('admin.scenarios')}}" class="nav-link">Scenarios</a></li>
        </ul>
      </nav>

    <!-- Main Content -->
    <div class="main-content flex-grow-1">
      <!-- Top Navbar -->
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand">Admin Dashboard</span>
          <div>
            <span class="me-3">Hello, {{ session('logged_in_user') }} </span>
            <a href="index.html" class="btn btn-primary">Home</a>
          </div>
        </div>
      </nav>

      <!-- Page Content -->
      <div class="p-4">
        <!-- Admin Details Section -->
        <h1>Users</h1>
        <h2>Admin Details</h2>
        <hr>
        <div class="d-flex justify-content-between mb-3">
          <input type="text" id="adminSearch" class="form-control w-50" placeholder="Search">
          <select id="adminEntries" class="form-select w-auto">
            <option value="3">3 entries</option>
            <option value="5">5 entries</option>
          </select>
        </div>
        
        
        <div class="table-container">
          <table id="adminTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Administrator Username</th>
                <th>Section</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Admin1</td>
                <td>Anael</td>
                <td>password</td>
              </tr>
            </tbody>
          </table>
        </div>
        

        <!-- Student Details Section -->
        <br>
        <h2>Student Details</h2>
        <hr>
        <div class="d-flex justify-content-between mb-3">
          <input type="text" id="studentSearch" class="form-control w-50" placeholder="Search">
          <select id="studentEntries" class="form-select w-auto">
            <option value="3">3 entries</option>
            <option value="5">5 entries</option>
          </select>
        </div>
        
        <div class="table-container">
          <table id="studentTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Student Username</th>
                <th>Section</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Student1</td>
                <td>Anael</td>
                <td>password</td>
              </tr>
            </tbody>
          </table>
        </div>
        

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="script.js"></script>
</body>
</html>
