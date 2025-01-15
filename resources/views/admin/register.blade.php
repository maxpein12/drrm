
<html lang="en">
<head>

    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Create Account</h2>
        <p>Please fill in the details below to create an account.</p>
    
        <!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Admin</h1>
    <form method="post" action="{{ route('admin.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <br><br>
        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
    
        <div class="register-link">
            Already have an account? <a href="{{ route('admin.login') }}">Login</a>
        </div>
    </div>
    

    <script src="/static/js/register.js"></script> 
</body>
</html>