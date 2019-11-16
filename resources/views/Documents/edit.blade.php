
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
            <h3>Edit PDF</h3>
        </div>


        <div class="row">
            <div class="col-lg-8 p-5" style = "margin-left: auto; margin-right: auto;">
                <form action="{{route('documents.update',['document' => $document->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Title</label>
                            <input type="text" name="title" value="{{$document->title}}" class="form-control" id="m_email">
                            <span>{{$errors->first('title')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_message">Abstract</label>
                            <textarea class="form-control" id="m_message" name="abstract" type="text" cols="30" rows="12">{{$document->abstract}}</textarea>
                            <span>{{$errors->first('abstract')}}</span>
                        </div>
                    </div>
                    @foreach($authors as $author)

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Author Name</label>
                            <input type="text" name="author_name" value="{{$author->name}}" class="form-control" id="m_email">
                            <span>{{$errors->first('author_name')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="m_email">Author's Email</label>
                            <input type="text" name="author_mail" value="{{$author->mail}}" class="form-control" id="m_email">
                            <span>{{$errors->first('author_mail')}}</span>
                        </div>
                    </div>
                    @endforeach

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="m_people">Sub-major</label>
                            <select class="form-control" name="submajor_id" id="">
                                @foreach($submajors as $submajor)
                                    <option value="{{$submajor->id}}" @if($document->submajor_id== $submajor->id) selected @endif>{{$submajor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top: 33px;" class="col-md-6 form-group">
                            <input class="form-control" type="file" name="pdf_file">
                            <span>{{$errors->first('pdf_file')}}</span>
                        </div>

                        <input type="text" hidden value="{{$major->id}}" name="major_id">
                        <input type="text" hidden value="{{$auth_user->id}}" name="owner_id">
                    </div>


                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save" style="width:100%">
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>


@endsection
