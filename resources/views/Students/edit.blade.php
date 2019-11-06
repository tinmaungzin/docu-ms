{{--<html>--}}
{{--<body>--}}
{{--<form action="{{route('students.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Name" value="{{$student->name}}">--}}
{{--    <span>{{$errors->first('name')}}</span>--}}
{{--    <input type="email" name="school_mail" placeholder="School Email" value="{{$student->school_mail}}">--}}
{{--    <span>{{$errors->first('school_mail')}}</span>--}}

{{--    <input type="text" name="student_id" placeholder="Student Id" value="{{$student->student_id}}">--}}
{{--    <span>{{$errors->first('student_id')}}</span>--}}

{{--    <select name="major_id" id="">--}}
{{--        @foreach($majors as $major)--}}
{{--            <option value="{{$major->id}}" @if($student->major_id== $major->id) selected @endif>{{$major->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <input type="text" name="roll_no" placeholder="Roll No." value="{{$student->roll_no}}">--}}
{{--    <span>{{$errors->first('roll_no')}}</span>--}}

{{--    <button type="submit">Update</button>--}}
{{--</form>--}}

{{--<p>Bookmark</p>--}}
{{--@foreach($bookmarkeds as $bookmarked)--}}
{{--    <a href="{{route('documents.show',['document' => $bookmarked->id])}}">{{$bookmarked->title}}</a>--}}
{{--    @endforeach--}}
{{--</body>--}}
{{--</html>--}}

@extends('layouts.master')

@section('content')

    <section class="site-cover" id="section-home">
        <div class="container-fluid" style="height: 85px; background-color: #e6e6e6;" >
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>

    <section class="site-section bg-light" id="section-news">
        <div class="container">
            <div class = personalInformationHeader>
                <h3>Personal Information</h3>
            </div>
            <div class="row" id="profilesection">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <img style="border-radius: 80%;height: 150px;width: 150px" src="{{asset('images/profile.jpg')}}">
                            <p><a href="#" class="btn btn-outline-white btn-lg site-animate">Upload</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 p-8">

                    <form action="{{route('students.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{$student->name}}" id="m_name" placeholder="Name">
                                <span>{{$errors->first('name')}}</span>

                            </div>
                        </div>
                        <label for="">Majors:</label>
                        <div class="row">
                            <div class="col-md-12 form-group">
{{--                                <label for="m_people">Sub-major</label>--}}
                                <select name="major_id" class="form-control" id="profileDropdown">
                                    @foreach($majors as $major)
                                        <option value="{{$major->id}}" @if($student->major_id== $major->id) selected @endif>{{$major->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="">Student ID:</label>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control" id="m_studentid" placeholder="Student ID">
                                <span>{{$errors->first('student_id')}}</span>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Email:</label>
                                <input type="email" name="school_mail" value="{{$student->school_mail}}" class="form-control" id="m_email" placeholder="email">
                                <span>{{$errors->first('school_mail')}}</span>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Password management:</label>
                                <input type="password" name="password" class="form-control" id="m_email" placeholder="Password">
                                <span>{{$errors->first('password')}}</span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">

                                <input type="password" name="confirm_password" class="form-control" id="m_email" placeholder="Confirm password">
                                <span>{{$errors->first('confirm_password')}}</span>

                            </div>
                        </div>
                        <div class = "editSaveButton">
                            <p><a href="#" class="btn btn-outline-white btn-lg site-animate" >Save</a></p>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        </div>
    </section>

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
{{--                                <input type="text" name="name" value="{{$student->name}}" class="form-control" id="m_name" placeholder="Name">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <!-- <label for="m_people">Sub-major</label> -->--}}


{{--                                <select name="major_id" class="form-control" id="">--}}
{{--                                        @foreach($majors as $major)--}}
{{--                                            <option value="{{$major->id}}" @if($student->major_id== $major->id) selected @endif>{{$major->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control" id="m_studentid" placeholder="Student ID">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <label for="">Contact information;</label>--}}
{{--                                <input type="email" name="school_mail" value="{{$student->school_mail}}" class="form-control" id="m_email" placeholder="email">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}
{{--                                <label for="">Password Update:</label>--}}
{{--                                <input type="password" name="password" class="form-control" id="m_email" placeholder="Old password">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 form-group">--}}

{{--                                <input type="password" name="" class="form-control" id="m_email" placeholder="New password">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p><a href="#" class="btn btn-outline-white btn-lg site-animate" style="text-align: right; margin-top: 0px !important">Change</a></p>--}}
{{--                        <button class="btn btn-secondary" style="margin-left: 38%" type="submit">Save</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="site-section bg-light" id="section-news">
        <div class="container">
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Bookmark History</span></p>
            <div class="row">
                    @foreach($bookmarkeds as $bookmarked)

                        <div class="col-lg-3 col-md-6 col-sm-6" >
                            <div class="media d-block mb-4 text-center site-media site-animate">
                                <div class = "indexThesis">
                                    <div class="media-body p-md-9 p-3" style="height: 380px">
                                        <div class = "indexThesisTitle">
                                            <h5 class="mt-0 h4">{{$bookmarked->title}}</h5>
                                            {{--                                        <p class="mb-4">Nay Paing Soe</p>--}}
                                        </div>
                                        @auth
                                            <div class = "indexThesisButton">
                                                <p class="mb-0">
                                                    <a href="{{route('documents.show',['document' => $bookmarked->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                                </p>
                                            </div>
                                        @endauth
                                        @guest
                                            <div class = "indexThesisButton">
                                                <p class="mb-0">
                                                    <a href="{{route('documents.guestShow',['document' => $bookmarked->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                                </p>
                                            </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </section>


@endsection
