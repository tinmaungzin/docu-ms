@extends('layouts.master')

@section('content')

    <section class="site-cover" id="section-home">
        <div class="container-fluid" style="height: 85px; background-color: #e6e6e6;" >
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>
    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h2 class="display-4"><span style="padding-top: 1em">{{$document->title}}</span></h2>
                </div>
            </div>

            <div class="col-md-12 site-animate">
                <div class = "bookDetailBody">
                    <div class = "bookDetails">
                        @auth
                            @foreach($authors as $author)
                                <p class="display-4">
                                <div class = "documentHeaderName">
                                    <span>Author:</span>
                                </div>
                                <div class = "documentHeaderValue">
                                    <a href="{{route('authors.show',['author' => $author->id])}}">
                                        <span>{{$author->name}}</span>
                                    </a>
                                </div>
                                </p>

                            @endforeach
                        @endauth

                        @guest
                            @foreach($authors as $author)
                                <p class="display-4">
                                <div class = "documentHeaderName">
                                    <span>Author:</span>
                                </div>
                                <div class = "documentHeaderValue">
                                    <a href="{{route('authors.guestShow',['author' => $author->id])}}">
                                        <span>{{$author->name}}</span>
                                    </a>
                                </div>
                                </p>
                            @endforeach
                        @endguest


                        <p class="display-4">
                        <div class = "documentHeaderName" style = "height: 60px;">
                            <span>Major:</span>
                        </div>
                        <div class = "documentHeaderValue" style = "height: 60px;">
                            <span>{{$document->major->name}}</span>
                        </div>
                        </p>
                    </div>
                        <div class = "bookMarkButton">
                            <span  class="mb-0" ><a href="{{route('hods.approve',['document' => $document->id])}}" class="btn btn-primary btn-lg">Approve PDF</a></span>
                        </div>


                </div>
                <div class = "documentAbstract">
                    <h3><span>Abstract</span></h3>
                </div>
                <p class="lead" id="individualabstract" style="text-align: justify !important;margin-left: 80px">
                    <span style="padding-left: 50px; padding-bottom: 15px">
                        {{$document->abstract}}
                    </span>
                </p>

                <div class = "bookDownloadButton">
                    <p  class="mb-0" ><a href="{{route('file.download',['name' => $document->filename])}}" class="btn btn-primary btn-lg">Download PDF</a></p>
                </div>
                <p class="display-4"><span style="font-size: 30px">Submission History</span></p>
                @foreach($histories as $history)
                    <a href="">- {{$history->title}}</a>
                @endforeach

                <p class="display-4"><span style="font-size: 30px">Uploader</span></p>
                <p>- {{$owner->name}}</p>
            </div>

        </div>
    </section>









{{--    <section class="site-section bg-light" id="section-contact">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center mb-5 site-animate">--}}
{{--                    <h2 class="display-4">--}}
{{--                        <span style="padding-top: 1em">{{$document->title}}</span>--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-12 site-animate">--}}
{{--                @auth--}}
{{--                    @foreach($authors as $author)--}}
{{--                        <p class="lead">--}}
{{--                            <a href="{{route('authors.show',['author' => $author->id])}}">--}}
{{--                                <span style="font-size: 30px">Author:</span><span style="font-size:30px">{{$author->name}}</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}

{{--                    @endforeach--}}
{{--                @endauth--}}
{{--                <p class="lead"><span style="font-size: 30px">Major:</span><span style="font-size:30px">{{$major}}</span></p>--}}
{{--                <p class="lead"><span style="font-size: 30px">Abstract</span></p>--}}
{{--                <p class="lead" style="text-align: justify !important; margin-left: 18%">--}}
{{--                    <span style="padding-left: 50px; padding-bottom: 15px">--}}
{{--                        {{$document->abstract}}--}}
{{--                    </span>--}}
{{--                </p>--}}

{{--                <p  class="mb-0" ><a href="{{route('file.download',['name' => $document->filename])}}" class="btn btn-primary btn-lg">Download PDF</a></p>--}}
{{--                    @if(!$document->approved)--}}
{{--                    @endif--}}
{{--                <p class="lead">--}}
{{--                <p style="font-size: 30px">Submission History</p>--}}
{{--                @foreach($histories as $history)--}}
{{--                    <a href="">- {{$history->title}}</a>--}}
{{--                    @endforeach--}}
{{--                    </p>--}}
{{--                    <p class="lead">--}}
{{--                    <p style="font-size: 30px">Uploader</p>--}}
{{--                    @auth--}}
{{--                        <p>- {{$owner->name}}</p>--}}
{{--                    @endauth--}}
{{--                        </p>--}}



{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}


    @endsection
