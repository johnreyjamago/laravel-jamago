<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,200;1,400&family=Oswald&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style-login.css'); }}" type="text/css">
</head>
<body>
        <div class="image">
            <img src="{{ URL::asset('images/snake.png'); }}" alt="">
        </div>
    <div class="form">
                <form action="{{route('login-user')}}" method="post">
                <img id="lock" src="{{ URL::asset('images/lock.png'); }}" alt="">

                        <p id="login">Login</p><br>
                        <input type="text" class="form-control" placeholder="Enter Username" name="username" value="{{old('username')}}"required><br><br>
            
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}"required><br><br>

                        <button class="button btn btn-block btn-primary" type="submit">Login</button>

                    <p>Don't have an account? <a href="registration">Signup</a></p>
                    
                    @if(Session::has('success'))
                    <div class="alert">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                </form>
    </div>
</body>
</html>