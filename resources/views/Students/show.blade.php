{{--<html>--}}
{{--<body>--}}
{{--<header>--}}
{{--    @auth--}}
{{--        @include('layouts.auth_nav')--}}
{{--    @endauth--}}

{{--    @guest--}}
{{--        @include('layouts.guest_nav')--}}
{{--    @endguest--}}
{{--</header>--}}

{{--<p>{{$student->name}}</p>--}}
{{--<p>{{$student->major->name}}</p>--}}

{{--<p>Upload History</p>--}}
{{--<ul>--}}
{{--    @foreach($documents as $document)--}}
{{--        <li>--}}

{{--            @auth--}}
{{--                <a href="{{route('documents.show',['document' => $document->id])}}">{{$document->title}}</a>--}}
{{--            @endauth--}}
{{--            @guest--}}
{{--                <a href="{{route('documents.guestShow',['document' => $document->id])}}">{{$document->title}}</a>--}}
{{--            @endguest--}}

{{--        </li>--}}
{{--        @endforeach--}}
{{--</ul>--}}

{{--</body>--}}
{{--</html>--}}

@extends('layouts.master')
@section('content')


    <section class="site-section bg-light" id="section-news">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <img style="border-radius: 80%;height: 150px;width: 150px" src=" {{asset('images/profile.jpg')}} ">
                            <h5 class="mt-0 h4" style="margin-top: 30px !important">{{$student->name}}</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 p-8">
                    <div class="row">
                        <p><span style="font-size: 20px;padding-left: 30px; padding-right: 70px !important">Major:</span><span style="color: #0f59a2;font-size: 20px">{{$student->major->name}}</span></p>
                    </div>
                    <div class="row">
                        <p><span style="font-size: 20px;padding-left: 30px; padding-right: 70px !important">Email:</span><span style="color: #0f59a2;font-size: 20px">{{$student->school_mail}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="site-section bg-light" id="section-news">
        <div class="container">
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Upload History</span></p>
            <div class="row">
                @foreach($documents as $document)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <h5 class="mt-0 h4">{{$document->title}}</h5>
{{--                            <p class="mb-4">Nay Paing Soe</p>--}}
                            @auth
                            <p class="mb-0">
                                <a href="{{route('documents.show',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a>
                            </p>
                                @endauth
                            @guest
                                <p class="mb-0">
                                    <a href="{{route('documents.guestShow',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a>
                                </p>
                                @endguest
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

{{--    @foreach($documents as $document)--}}
{{--                @auth--}}
{{--                    <a href="{{route('documents.show',['document' => $document->id])}}">{{$document->title}}</a>--}}
{{--                @endauth--}}
{{--                @guest--}}
{{--                    <a href="{{route('documents.guestShow',['document' => $document->id])}}">{{$document->title}}</a>--}}
{{--                @endguest--}}
{{--            @endforeach--}}

@endsection
