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
                                            <div class = "indexThesisButton">
                                                <p class="mb-0">
                                                    <a href="{{route('documents.show',['document' => $bookmarked->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                                </p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Approved Documents</span></p>
            <div class="row">
                @foreach($approved_books as $approved_book)

                    <div class="col-lg-3 col-md-6 col-sm-6" >
                        <div class="media d-block mb-4 text-center site-media site-animate">
                            <div class = "indexThesis">
                                <div class="media-body p-md-9 p-3" style="height: 380px">
                                    <div class = "indexThesisTitle">
                                        <h5 class="mt-0 h4">{{$approved_book->title}}</h5>
                                        {{--                                        <p class="mb-4">Nay Paing Soe</p>--}}
                                    </div>
                                        <div class = "indexThesisButton">
                                            <p class="mb-0">
                                                <a href="{{route('documents.show',['document' => $approved_book->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                            </p>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Pending Documents</span></p>
            <div class="row">
                @foreach($pending_books as $pending_book)

                    <div class="col-lg-3 col-md-6 col-sm-6" >
                        <div class="media d-block mb-4 text-center site-media site-animate">
                            <div class = "indexThesis">
                                <div class="media-body p-md-9 p-3" style="height: 380px">
                                    <div class = "indexThesisTitle">
                                        <h5 class="mt-0 h4">{{$pending_book->title}}</h5>
                                        {{--                                        <p class="mb-4">Nay Paing Soe</p>--}}
                                    </div>
                                        <div class = "indexThesisButton">
                                            <p class="mb-0">
                                                <a href="{{route('documents.show',['document' => $pending_book->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                            </p>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>


@endsection
