<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Students</title>
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
          <li class="nav-item"><a href="{{ route('admin.users')}}" class="nav-link">Users</a></li>
          <li class="nav-item"><a href="{{ route('admin.sections')}}" class="nav-link">Sections</a></li>
          <li class="nav-item"><a href="{{ route('admin.students')}}" class="nav-link active">Students</a></li>
          <li class="nav-item"><a href="{{ route('admin.disasters')}}" class="nav-link">Disasters</a></li>
          <li class="nav-item"><a href="{{ route('admin.scenarios')}}" class="nav-link">Scenarios</a></li>
        </ul>
      </nav>

    <!-- Main Content -->
    <div class="main-content flex-grow-1">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand">Admin Dashboard</span>
          <div>
            <span class="me-3">Hello, {{ session('logged_in_user') }}</span>
            <a href="index.html" class="btn btn-primary">Home</a>
          </div>
        </div>
      </nav>
      <div class="p-4">
        <h1>Students</h1>
        <h2>Student Details</h2>
        <hr>
        <div class="d-flex justify-content-between mb-3">
          <input type="text" class="form-control w-50" placeholder="Search">
          <select class="form-select w-auto">
            <option>10 entries</option>
            <option>25 entries</option>
          </select>
        </div>
        
        <div class="table-container">
        <table id="adminTable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Section</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Anael</td>
              <td>
                <button class="btn btn-primary">View Results</button>
                <button class="btn btn-danger">Download</button>

              </td>
            </tr>
  
          </tbody>
        </table>
        </div>


      </div>
    </div>
  </div>
</body>
</html>
