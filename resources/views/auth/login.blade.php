<!doctype html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/')}}/images/favicon.png">
    <!--Font Links-->
    <!--Plugin Links-->
    <!--CSS Links-->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/media.css">
    <title>Welcome</title>
    <script src="https://kit.fontawesome.com/bbb5971462.js" crossorigin="anonymous"></script>
    <style>
        *{
            font-size: 16px!important;
        }
    </style>
</head>
<body>
<header>
    <div class="text-center">
        <img src="{{asset('assets/frontend/')}}/images/logo.png" class="img-fluid my-4" alt="logo">
    </div>
    <div id="loginbox">
        <form action="{{route('user.login.submit')}}" method="post">
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <img src="{{asset('assets/frontend/')}}/images/username.png" class="img-fluid input-group-text" alt="User">
                </div>
                <input type="text" class="form-control" placeholder="Enter User Name" name="user_name" maxlength="14" required>
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <img src="{{asset('assets/frontend/')}}/images/password.png" class="img-fluid input-group-text" alt="Password">
                </div>
                <input type="text" class="form-control" name="password" placeholder="Enter Password" maxlength="14" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn p-0"><img src="{{asset('assets/frontend/')}}/images/login_btn1.png" class="img-fluid" alt="log in"></button>
            </div>
            <div class="form-group">
                <a href="{{route('register')}}" class="btn p-0"><img src="{{asset('assets/frontend/')}}/images/join_in_hover.png" class="img-fluid" alt="join in"></a>
            </div>
        </form>
        <a href="{{route('register')}}" class="text-decoration-none text-white">Forgot your login?</a>
    </div>
</header>
<!--jQuery Links-->
<script src="{{asset('assets/frontend/')}}/js/jquery-1.12.4.min.js"></script>
<!--Plugin Links -->
<!--BS Links -->
<script src="{{asset('assets/frontend/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/script.js"></script>
</body>
</html>
