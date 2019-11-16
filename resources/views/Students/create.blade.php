<html>
<head lang = "en">
    <title>Sign Up | MTU</title>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel = "shortcut icon" href = "{{asset('images/MTU_logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<form action="{{route('students.store')}}" method="post">
    @csrf
<div class = "signUpBody">
    <div class = "signUpHeader">
        <div class = "signUpLogo">
            <img src = "{{asset('images/MTU_logo.png')}}">
        </div>
        <div class = "signUpTitle">
            <p>Mandalay Technological University</p>
        </div>
    </div>
    <div class = "signUpMainBody">
        <div class = "signUpInputs">
            <div class = "signUpName">
                Name
            </div>
            <div class = "signUpValue">
                <input type = "text" name = "name" placeholder = " Name">
                <span style="color:red;">{{$errors->first('name')}}</span>

            </div>

        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Major
            </div>
            <div class = "signUpValue">
                <div class="row">
                    <div class="col-md-12 ">
                        <select name="major_id" class="form-control" id="">
                            @foreach($majors as $major)
                                <option value="{{$major->id}}">{{$major->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Student ID
            </div>
            <div class = "signUpValue">
                <input type = "text" name = "student_id" placeholder = " Student ID">
                <span style="color: red;">{{$errors->first('student_id')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                E-mail
            </div>
            <div class = "signUpValue">
                <input type = "email" name = "school_mail" placeholder = " E-mail">
                <span style="color: red;">{{$errors->first('school_mail')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Roll No
            </div>
            <div class = "signUpValue">
                <input type = "text" name = "roll_no" placeholder = 'roll_no'>
                <span style="color: red;">{{$errors->first('roll_no')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Password
            </div>
            <div class = "signUpValue">
                <input type = "password" name = "password" placeholder = " Password">
                <span style="color: red;">{{$errors->first('password')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Confirm Password
            </div>
            <div class = "signUpValue">
                <input type = "password" name = "confirm_password" placeholder = " Password">
                <span style="color: red;">{{$errors->first('confirm_password')}}</span>

            </div>
        </div>
        <div class = "signUpEnterButton">
            <button type = "submit" value = "enter">Sign Up</button>
        </div>
        <div class = "signUpButton">
            <p>Already had an account? <a href = "{{route('login')}}">Log in</a> here</p>
        </div>
    </div>
</div>
</form>
</body>
</html>
