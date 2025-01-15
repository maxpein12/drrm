<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SafeScape</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="nav">
        <div class="appname" style="font-size: 50px;">SafeScape</div>
        <div class="admin">
            <div class="logo">
                <a href="{{ route('admin.index') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/10412/10412528.png" alt="">
                </a>
            </div>
            <div class="name">
                Admin
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="buttons">
            <a href="{{ route('student.register') }}"><button>Student Sign-up</button></a>
            <a href="{{ route('student.login') }}"><button>Student Login</button></a>
        </div>
        <div class="image">
            <img src="https://www.shutterstock.com/image-illustration/no-picture-available-placeholder-thumbnail-600nw-2179364083.jpg" alt="">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .nav {
           
            display: flex;
            justify-content: space-between;
            background-color: rgb(233, 228, 228);
        }
        .appname {
            
        }
        .admin {
           
            
        }
        .admin > .logo > a > img{
            height: 50px;
            width: 50px;
            margin-right: 20px;
        }
        .main-content {
            display: flex;
            margin-top: 150px;
            
        }
        .buttons{
            display: flex;
            flex-direction: column;
            margin-left: auto;
            justify-content: center;
        }
        .buttons > a > button{
            border-radius: 25px;
            margin: 10px;
            width: 200px;
            
        }
        .image {
            margin-right: auto;
        }
        .image > img {
            max-width: 300px;
            max-height: 300px;
        }
        
    </style>
</body>
</html>