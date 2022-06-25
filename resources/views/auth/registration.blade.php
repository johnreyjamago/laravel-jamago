<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,200;1,400&family=Oswald&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style-register.css'); }}" type="text/css">
</head>
<body>
    <div class="image">
        <img src="{{ URL::asset('images/snake.png'); }}" alt="">
    </div>
    <div class="form">
                <form action="{{route('register-user')}}" method="post">
                        <img id="lock" src="{{ URL::asset('images/lock.png'); }}" alt="">
                        <p id="register">Register</p><br>
            
                        <input type="text" class="form-control" placeholder="Enter Student ID" name="studentid" value="{{old('studentid')}}"required><br><br>
               
                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" value="{{old('firstname')}}"required><br><br>
                 
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname" value="{{old('lastname')}}"required><br><br>
                  
                        <input type="text" class="form-control" placeholder="Enter Middle Intitial" name="mi" value="{{old('mi')}}"required><br><br>
                    
                        <input type="text" class="form-control" placeholder="Enter Course" name="course" value="{{old('course')}}"required><br><br>
                
                        <input type="text" class="form-control" placeholder="Enter Year Level" name="yearlevel" value="{{old('yearlevel')}}"required><br><br>
                 
                        <input type="text" class="form-control" placeholder="Enter Username" name="username" value="{{old('username')}}"required><br><br>
        
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}"required><br><br>
               
                        <button class="button btn btn-block btn-primary" type="submit">Register</button>
                    <br>
                    <p>Already have an account? <a href="login">Login</a><br></p>

                    @if(Session::has('success'))
                    <div class="alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                </form>
    </div>
</body>
</html>

<html lang="en">