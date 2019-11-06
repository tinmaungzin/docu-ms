{{--<html>--}}
{{--<body>--}}

{{--<form action="login" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="school_mail" placeholder="School Mail">--}}
{{--    <input type="password" name="password" placeholder="Password">--}}
{{--    <button type="submit">Login</button>--}}
{{--</form>--}}


{{--</body>--}}
{{--</html>--}}



<html>
<head lang = "en">
    <title>Log In | MTU</title>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel = "shortcut icon" href = " {{asset('images/MTU_logo.png')}} ">
</head>
<body>
<div class = "logInBody">
    <div class = "logInHeader">
        <div class = "logInLogo">
            <img src = "images/MTU_logo.png">
        </div>
        <div class = "logInTitle">
            <p>Mandalay Technological University</p>
        </div>
    </div>
    <form action="login" method="post">
        @csrf
        <div class = "logInMainBody">
        <div class = "logInInputs">
            <div class = "logInName" id = "logInInputs1">
                School Mail
            </div>
            <div class = "logInValue">
                <input type = "test" name = "school_mail" placeholder = " eg.. someone@mtu.edu.mm">
                <span class="text-danger" style="color: red; font-size: 12px;">{{$errors->first('school_mail')}}</span>
            </div>
        </div>
        <div class = "logInInputs">
            <div class = "logInName">
                Password
            </div>
            <div class = "logInValue">
                <input type = "password" name = "password" placeholder = " ">
                <span class="text-danger" style="color: red; font-size: 12px;">{{$errors->first('password')}}</span>

            </div>
        </div>
        <div class = "enterButton">
            <button type = "submit" value = "enter">Log In</button>
        </div>
        <div class = "signUpButton">
            <p>Don't have a account? <a href = "{{route('students.create')}}">Sign Up</a> here</p>
        </div>
    </div>
    </form>
</div>
</body>
</html>
