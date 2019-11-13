{{--<html>--}}
{{--    <body>--}}
{{--    <header>--}}


{{--        @auth--}}
{{--            @include('layouts.auth_nav')--}}
{{--        @endauth--}}

{{--        @guest--}}
{{--            @include('layouts.guest_nav')--}}
{{--        @endguest--}}
{{--    </header>--}}
{{--        <form action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <select name="submajor_id" id="">--}}
{{--                @foreach($submajors as $submajor)--}}
{{--                    <option value="{{$submajor->id}}">{{$submajor->name}}</option>--}}
{{--                    @endforeach--}}
{{--            </select>--}}
{{--            <input type="text" hidden value="{{$major->id}}" name="major_id">--}}

{{--            <input type="text" hidden value="{{$auth_user->id}}" name="owner_id">--}}
{{--            <input type="text" name="title" placeholder="Title">--}}
{{--            <span>{{$errors->first('title')}}</span>--}}

{{--            <textarea name="abstract" id="" cols="30" rows="10" placeholder="Abstract"></textarea>--}}
{{--            <span>{{$errors->first('abstract')}}</span>--}}

{{--            <input type="file" name="pdf_file">--}}
{{--            <span>{{$errors->first('pdf_file')}}</span>--}}

{{--            <input type="text" name="author_name" placeholder="author name">--}}
{{--            <span>{{$errors->first('author_name')}}</span>--}}
{{--            <input type="text" name="author_mail" placeholder="author email">--}}
{{--            <span>{{$errors->first('author_mail')}}</span>--}}

{{--            <button type="submit">Upload</button>--}}
{{--        </form>--}}
{{--    </body>--}}
{{--</html>--}}

@extends('layouts.master')
@section('content')

    <section class="site-cover" id="section-home">
        <div class="container-fluid" style="height: 85px; background-color: #e6e6e6;" >
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>

{{--    <div>--}}
{{--        <div class="modal-dialog modal-lg" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="bg-image" style="background-image: url('{{asset('images/reservation_1.jpg')}}' );"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12 p-5">--}}
{{--                            <h1 class="mb-4">Upload file</h1>--}}
{{--                            <form action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 form-group">--}}
{{--                                        <label for="m_email">Title</label>--}}
{{--                                        <input type="text" name="title" class="form-control" id="m_email">--}}
{{--                                        <span>{{$errors->first('title')}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 form-group">--}}
{{--                                        <label for="m_message">Abstract</label>--}}
{{--                                        <textarea class="form-control" name="abstract" type="text" id="m_message" cols="30" rows="7"></textarea>--}}
{{--                                        <span>{{$errors->first('abstract')}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 form-group">--}}
{{--                                        <label for="m_email">Author Name</label>--}}
{{--                                        <input type="text" name="author_name" class="form-control" id="m_email">--}}
{{--                                        <span>{{$errors->first('author_name')}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 form-group">--}}
{{--                                        <label for="m_email">Author's Email</label>--}}
{{--                                        <input type="email" name="author_mail" class="form-control" id="m_email">--}}
{{--                                        <span>{{$errors->first('author_mail')}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 form-group">--}}
{{--                                        <label for="m_people">Sub-major</label>--}}
{{--                                        <select class="form-control" name="submajor_id" id="">--}}
{{--                                            @foreach($submajors as $submajor)--}}
{{--                                                <option value="{{$submajor->id}}">{{$submajor->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 form-group">--}}
{{--                                        <input style="margin-top: 8%; margin-left: -26%;" class="form-control" type="file" name="pdf_file">--}}
{{--                                        <span>{{$errors->first('pdf_file')}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <input type="text" hidden value="{{$major->id}}" name="major_id">--}}
{{--                                <input type="text" hidden value="{{$auth_user->id}}" name="owner_id">--}}


{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 form-group">--}}
{{--                                        <input type="submit" class="btn btn-primary btn-lg btn-block" style="width: 75%;" value="Submit">--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class = "uploadMainBody">

        <div class = "uploadHeader">
            <h3>Upload PDF</h3>
        </div>


        <div class="row">
            <div class="col-lg-8 p-5" style = "margin-left: auto; margin-right: auto;">
                <form action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Title</label>
                            <input type="text" name="title" class="form-control" id="m_email">
                            <span>{{$errors->first('title')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_message">Abstract</label>
                            <textarea class="form-control" name="abstract" type="text" id="m_message" cols="30" rows="7"></textarea>
                            <span>{{$errors->first('abstract')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Author Name</label>
                            <input type="text" name="author_name" class="form-control" id="m_email">
                            <span>{{$errors->first('author_name')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Author's Email</label>
                            <input type="email" name="author_mail" class="form-control" id="m_email">
                            <span>{{$errors->first('author_mail')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="m_people">Sub-major</label>
                            <select class="form-control" name="submajor_id" id="">
                                @foreach($submajors as $submajor)
                                    <option value="{{$submajor->id}}">{{$submajor->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="col-md-6 form-group">--}}
{{--                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Upload</a></p>--}}
{{--                        </div>--}}
                        <div style="margin-top: 33px;" class="col-md-6 form-group">
                            <input class="form-control" type="file" name="pdf_file">
                            <span>{{$errors->first('pdf_file')}}</span>
                        </div>

                        <input type="text" hidden value="{{$major->id}}" name="major_id">
                        <input type="text" hidden value="{{$auth_user->id}}" name="owner_id">
                    </div>


                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" style="width:100%">
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>



@endsection
