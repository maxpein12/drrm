
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
       
        
        <form method="post" action="{{ route('admin-login') }}">
            @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="" value="" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="" placeholder="" required>
                    <a href="#" class="forgot-password">Forget Password?</a>
            </div>
            

            <div class="input-group checkbox-group">
                <div class="checkbox-label">
                    <input type="checkbox" id="rememberMe" name="rememberMe">
                    <label for="rememberMe">Remember Password</label>
                </div>

            </div>

            <button type="submit" value="Login" class="btn">Sign In</button>

            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('admin.register') }}">Sign up</a></p>
            </div>

            <p id="errorMessage" class="error-message"></p>
        </form>
    </div>

</body>
</html>