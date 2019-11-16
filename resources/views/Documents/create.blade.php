
@extends('layouts.master')
@section('content')

    <section class="site-cover" id="section-home">
        <div class="container-fluid" style="height: 85px; background-color: #e6e6e6;" >
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>


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
