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
            <div class = "viewProfileHeader">
                <h3>Author Profile</h3>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <img style="border-radius: 80%;height: 150px;width: 150px" src="{{asset('images/profile.jpg')}} ">
                            <h5 class="mt-0 h4" style="margin-top: 30px !important">{{$author->name}}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 p-8" style = "background-color: white;height: 255px; margin-top: 20px;">
                    <div class="row" style = "margin-top: 20px !important;">
                        <p><span style="font-size: 20px;padding-left: 30px; padding-right: 70px !important">Email:</span><span style="color: #0f59a2;font-size: 20px">{{$author->mail}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section bg-light" id="section-news">
        <div class="container">
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Documents</span></p>
            <div class="row">
                @foreach($documents as $document)

                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class = "indexThesis">
                            <div class="media-body p-md-9 p-3" style="height: 380px">
                                <div class = "indexThesisTitle">
                                    <h5 class="mt-0 h4">{{$document->title}}</h5>
{{--                                        <p class="mb-4">Nay Paing Soe</p>--}}
                                </div>
                                @auth
                                    <div class = "indexThesisButton">
                                        <p class="mb-0">
                                            <a href="{{route('documents.show',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                        </p>
                                    </div>
                                @endauth
                                @guest
                                    <div class = "indexThesisButton">
                                        <p class="mb-0">
                                            <a href="{{route('documents.guestShow',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a>
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
