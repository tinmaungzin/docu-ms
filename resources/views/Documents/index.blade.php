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


{{--<ul>--}}
{{--    @foreach($documents as $document)--}}
{{--        <li>--}}
{{--            @auth--}}
{{--                <a href="{{route('documents.show',['document' => $document->id])}}">{{$document->title}}</a>--}}

{{--            @endauth--}}
{{--            @guest--}}
{{--                    <a href="{{route('documents.guestShow',['document' => $document->id])}}">{{$document->title}}</a>--}}
{{--                @endguest--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--</body>--}}
{{--</html>--}}


@extends('layouts.master')
@section('content')

    <section class="site-cover" style="background-image: url('{{asset('images/bg.jpg')}}')" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>
    <section class="site-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h2 class="display-4">Research Papers</h2>

                </div>

                <div class="col-md-12 text-center">

                    <div class="row">


                        @foreach($documents as $document)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="media d-block mb-4 text-center site-media site-animate">
                                    <div class="media-body p-md-9 p-3">
                                        <h5 class="mt-0 h4">{{$document->title}}</h5>
                                        @foreach($document->authors as $author)
                                            <p class="mb-4">{{$author->name}}</p>
                                        @endforeach
                                        @auth
                                            <p class="mb-0"><a href="{{route('documents.show',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a></p>
                                        @endauth
                                        @guest
                                            <p class="mb-0"><a href="{{route('documents.guestShow',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a></p>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

{{--                    <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link active" id="pills-datamining-tab" data-toggle="pill" href="#pills-datamining" role="tab" aria-controls="pills-datamining" aria-selected="true">Data mining</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link" id="pills-imageprocessing-tab" data-toggle="pill" href="#pills-imageprocessing" role="tab" aria-controls="pills-imageprocessing" aria-selected="false">Image processing</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link" id="pills-security-tab" data-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">Security</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link" id="pills-bigdata-tab" data-toggle="pill" href="#pills-bigdata" role="tab" aria-controls="pills-bigdata" aria-selected="false">Big Data</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link" id="pills-iot-tab" data-toggle="pill" href="#pills-iot" role="tab" aria-controls="pills-iot" aria-selected="false">IOT</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item site-animate">--}}
{{--                            <a class="nav-link" id="pills-networking-tab" data-toggle="pill" href="#pills-networking" role="tab" aria-controls="pills-networking" aria-selected="false">Networking</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}



{{--                    <div class="tab-content text-left">--}}
{{--                        <div class="tab-pane fade show active" id="pills-datamining" role="tabpanel" aria-labelledby="pills-datamining-tab">--}}
{{--                            <div class="row">--}}


{{--                                @foreach($documents as $document)--}}
{{--                                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                        <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                            <div class="media-body p-md-9 p-3">--}}
{{--                                                <h5 class="mt-0 h4">{{$document->title}}</h5>--}}
{{--                                                <p class="mb-4">{{$document->author->name}}</p>--}}
{{--                                                <p class="mb-0"><a href="individualbookpage.html" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                                @auth--}}
{{--                                                    <p class="mb-0"><a href="{{route('documents.show',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                                @endauth--}}
{{--                                                @guest--}}
{{--                                                    <p class="mb-0"><a href="{{route('documents.guestShow',['document' => $document->id])}}" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                                @endguest--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                        <div class="tab-pane fade" id="pills-imageprocessing" role="tabpanel" aria-labelledby="pills-imageprocessing-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                        <div class="media-body p-md-9 p-3">--}}
{{--                                            <h5 class="mt-0 h4">Image Processing Title</h5>--}}
{{--                                            <p class="mb-4">Nay Paing Soe</p>--}}
{{--                                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p style="text-align: right !important"><a href="#" class="btn btn-outline-white btn-lg site-animate">View More</a></p>--}}
{{--                        </div>--}}



{{--                        <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                        <div class="media-body p-md-9 p-3">--}}
{{--                                            <h5 class="mt-0 h4">Security Title</h5>--}}
{{--                                            <p class="mb-4">Nay Paing Soe</p>--}}
{{--                                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p style="text-align: right !important"><a href="#" class="btn btn-outline-white btn-lg site-animate">View More</a></p>--}}
{{--                        </div>--}}



{{--                        <div class="tab-pane fade" id="pills-bigdata" role="tabpanel" aria-labelledby="pills-bigdata-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                        <div class="media-body p-md-9 p-3">--}}
{{--                                            <h5 class="mt-0 h4">Big data Title</h5>--}}
{{--                                            <p class="mb-4">Nay Paing Soe</p>--}}
{{--                                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p style="text-align: right !important"><a href="#" class="btn btn-outline-white btn-lg site-animate">View More</a></p>--}}
{{--                        </div>--}}




{{--                        <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                        <div class="media-body p-md-9 p-3">--}}
{{--                                            <h5 class="mt-0 h4">IOT Title</h5>--}}
{{--                                            <p class="mb-4">Nay Paing Soe</p>--}}
{{--                                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p style="text-align: right !important"><a href="#" class="btn btn-outline-white btn-lg site-animate">View More</a></p>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="pills-networking" role="tabpanel" aria-labelledby="pills-networking-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                                    <div class="media d-block mb-4 text-center site-media site-animate">--}}
{{--                                        <div class="media-body p-md-9 p-3">--}}
{{--                                            <h5 class="mt-0 h4">Networking Title</h5>--}}
{{--                                            <p class="mb-4">Nay Paing Soe</p>--}}
{{--                                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p style="text-align: right !important"><a href="#" class="btn btn-outline-white btn-lg site-animate">View More</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection













