{{--<html>--}}
{{--    <body>--}}
{{--        <form action="{{route('students.store')}}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="text" name="name" placeholder="Name">--}}
{{--            <span>{{$errors->first('name')}}</span>--}}
{{--            <input type="email" name="school_mail" placeholder="School Email">--}}
{{--            <span>{{$errors->first('school_mail')}}</span>--}}

{{--            <input type="password" name="password" placeholder="Password">--}}
{{--            <span>{{$errors->first('password')}}</span>--}}

{{--            <input type="password" name="confirm_password" placeholder="Comfirm Password">--}}
{{--            <span>{{$errors->first('confirm_password')}}</span>--}}

{{--            <input type="text" name="student_id" placeholder="Student Id">--}}
{{--            <span>{{$errors->first('student_id')}}</span>--}}

{{--            <select name="major_id" id="">--}}
{{--                @foreach($majors as $major)--}}
{{--                    <option value="{{$major->id}}">{{$major->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <input type="text" name="roll_no" placeholder="Roll No.">--}}
{{--            <span>{{$errors->first('roll_no')}}</span>--}}

{{--            <button type="submit">Register</button>--}}
{{--        </form>--}}
{{--    </body>--}}
{{--</html>--}}


{{--@extends('layouts.master')--}}
{{--@section('content')--}}

{{--    <section class="site-section bg-light" id="section-news">--}}
{{--        <div class="container">--}}
{{--            <div class="row" id="profilesection">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                        <div class="media-body p-md-9 p-3">--}}
{{--                            <img style="border-radius: 80%;height: 150px;width: 150px" src=" {{asset('images/profile.jpg')}} ">--}}
{{--                            <p><a href="#" class="btn btn-outline-white btn-lg site-animate">Upload</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-lg-8 p-8">--}}
{{--                    <form action="{{route('students.store')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <label for="">Personal information:</label>--}}
{{--                                <input type="text" name="name" class="form-control" id="m_name" placeholder="Name">--}}
{{--                                <span>{{$errors->first('name')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <select name="major_id" class="form-control" id="">--}}
{{--                                    @foreach($majors as $major)--}}
{{--                                        <option value="{{$major->id}}">{{$major->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <input type="text" name="student_id" class="form-control" id="m_studentid" placeholder="Student ID">--}}
{{--                                <span>{{$errors->first('student_id')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <input type="text" name="roll_no" class="form-control" id="m_studentid" placeholder="Roll No">--}}
{{--                                <span>{{$errors->first('roll_no')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <label for="">Contact information;</label>--}}
{{--                                <input type="email" name="school_mail" class="form-control" id="m_email" placeholder="email">--}}
{{--                                <span>{{$errors->first('school_mail')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <label for="">Password management:</label>--}}
{{--                                <input type="password" name="password" class="form-control" id="m_email" placeholder=" Password">--}}
{{--                                <span>{{$errors->first('password')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}

{{--                                <input type="password" name="confirm_password" class="form-control" id="m_email" placeholder="Confirm password">--}}
{{--                                <span>{{$errors->first('confirm_password')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p><a href="#" class="btn btn-outline-white btn-lg site-animate" style="text-align: right; margin-top: 0px !important">Change</a></p>--}}
{{--                        <button style="margin-left: 35%;" class="btn btn-secondary" type="submit">Register</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--@endsection--}}



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
                <span>{{$errors->first('name')}}</span>

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
                <span>{{$errors->first('student_id')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                E-mail
            </div>
            <div class = "signUpValue">
                <input type = "email" name = "school_mail" placeholder = " E-mail">
                <span>{{$errors->first('school_mail')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Roll No
            </div>
            <div class = "signUpValue">
                <input type = "text" name = "roll_no" placeholder = 'roll_no'>
                <span>{{$errors->first('roll_no')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Password
            </div>
            <div class = "signUpValue">
                <input type = "password" name = "password" placeholder = " Password">
                <span>{{$errors->first('password')}}</span>

            </div>
        </div>
        <div class = "signUpInputs">
            <div class = "signUpName">
                Confirm Password
            </div>
            <div class = "signUpValue">
                <input type = "password" name = "confirm_password" placeholder = " Password">
                <span>{{$errors->first('confirm_password')}}</span>

            </div>
        </div>
        <div class = "signUpEnterButton">
            <button type = "submit" value = "enter">Sign Up</button>
        </div>
        <div class = "signUpButton">
            <p>Already had an account? <a href = "#toLogIn">Log in</a> here</p>
        </div>
    </div>
</div>
</form>
</body>
</html>
