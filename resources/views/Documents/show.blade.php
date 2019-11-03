{{--<html>--}}
{{--<body>--}}
{{--<header>--}}

{{--    @auth--}}
{{--           @include('layouts.auth_nav')--}}
{{--        @endauth--}}

{{--    @guest--}}
{{--           @include('layouts.guest_nav')--}}
{{--        @endguest--}}

{{--</header>--}}

{{--    <p>Title - {{$document->title}}</p>--}}
{{--    <p>Abstract - {{$document->abstract}}</p>--}}
{{--    <p>Edit History</p>--}}
{{--@foreach($histories as $history)--}}
{{--    <a href="">{{$history->title}}</a>--}}
{{--    @endforeach--}}

{{--<br>--}}
{{--@auth--}}
{{--    @if(\Illuminate\Support\Facades\Auth::user()->id== $document->owner_id)--}}
{{--        <a href="{{route('documents.edit',['document' => $document->id])}}">Edit Document</a>--}}
{{--        @endif--}}

{{--    @endauth--}}
{{--@auth--}}
{{--    @if(\Illuminate\Support\Facades\Auth::user()->id!= $document->owner_id)--}}
{{--        @if($bookmark->count()>0)--}}
{{--        <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">UnBOOkmark</a>--}}
{{--            @else--}}
{{--            <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">Bookmark</a>--}}
{{--                @endif--}}
{{--        @endif--}}
{{--    @endauth--}}
{{--<br>--}}

{{--@auth--}}
{{--@foreach($authors as $author)--}}
{{--    <a href="{{route('authors.show',['author' => $author->id])}}">Author - {{$author->name}}</a>--}}
{{--    <br>--}}
{{--    @endforeach--}}
{{--@endauth--}}

{{--@guest--}}
{{--    @foreach($authors as $author)--}}
{{--        <a href="{{route('authors.guestShow',['author' => $author->id])}}">Author - {{$author->name}}</a>--}}
{{--        <br>--}}
{{--    @endforeach--}}
{{--    @endguest--}}
{{--@auth--}}
{{--    <a href="{{route('students.show',['student' => $document->owner_id])}}">Uploader - {{$owner->name}}</a>--}}
{{--    <br>--}}

{{--@endauth--}}

{{--@guest--}}
{{--    <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">Uploader - {{$owner->name}}</a>--}}
{{--    <br>--}}
{{--@endguest--}}
{{--    <a href="{{route('file.download',['name' => $document->filename])}}">Download</a>--}}

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

    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h2 class="display-4">
                        <span style="padding-top: 1em">{{$document->title}}</span>
                        <span style="text-align: right;">
{{--                            <img style="width:150px;height:150px;" src="images/bookmark.png" >--}}
{{--                            <img style="width:150px;height:150px;" src="images/bookmark1.png" >--}}


                            @auth
                                @if(\Illuminate\Support\Facades\Auth::user()->id!= $document->owner_id)
                                    @if($bookmark->count()>0)
                                    <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">
                                        <img style="width:150px;height:150px;" src=" {{asset('images/bookmark1.png')}} " >
                                    </a>
                                        @else
                                        <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">
                                            <img style="width:150px;height:150px;" src="{{asset('images/bookmark.png')}} " >
                                        </a>
                                            @endif
                                    @endif
                                @endauth
                        </span>
                    </h2>
                </div>
            </div>
{{--            <div class="col-md-1"></div>--}}
            <div class="col-md-12 site-animate">

{{--                <p class="lead">--}}
{{--                    <span style="font-size: 30px">Author:</span><span style="font-size:30px">{{$author->name}}</span>--}}
{{--                </p>--}}
                @auth
                    @foreach($authors as $author)
                            <p class="lead">
                                <a href="{{route('authors.show',['author' => $author->id])}}">
                                    <span style="font-size: 30px">Author:</span><span style="font-size:30px">{{$author->name}}</span>
                                </a>
                            </p>

                        @endforeach
                @endauth

                @guest
                    @foreach($authors as $author)
                        <p class="lead">
                            <a href="{{route('authors.guestShow',['author' => $author->id])}}">
                                <span style="font-size: 30px">Author:</span><span style="font-size:30px">{{$author->name}}</span>
                            </a>
                        </p>
                    @endforeach
                    @endguest
                <p class="lead"><span style="font-size: 30px">Major:</span><span style="font-size:30px">{{$major}}</span></p>
                <p class="lead"><span style="font-size: 30px">Abstract</span></p>
                <p class="lead" style="text-align: justify !important; margin-left: 18%">
                    <span style="padding-left: 50px; padding-bottom: 15px">
                        {{$document->abstract}}
                    </span>
                </p>

                <p  class="mb-0" ><a href="{{route('file.download',['name' => $document->filename])}}" class="btn btn-primary btn-lg">Download PDF</a></p>
                @auth
                    @if(\Illuminate\Support\Facades\Auth::user()->id== $document->owner_id)
                        <p  class="mb-0" ><a href="{{route('documents.edit',['document' => $document->id])}}" class="btn btn-primary btn-lg">Edit Document</a></p>
                    @endif
                    @endauth
                <p class="lead">
                    <p style="font-size: 30px">Submission History</p>
                    @foreach($histories as $history)
                        <a href="">- {{$history->title}}</a>
                        @endforeach
                </p>
                <p class="lead">
                    <p style="font-size: 30px">Uploader</p>
                    @auth
                        <a href="{{route('students.show',['student' => $document->owner_id])}}">- {{$owner->name}}</a>

                    @endauth

                    @guest
                        <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">- {{$owner->name}}</a>
                        @endguest
                </p>


            </div>

        </div>
    </section>

    <section class="bg-light" id="section_news">
        <div class="container">
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Recommendation</span></p>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <h5 class="mt-0 h4">Chatbot using deeplearning</h5>
                            <p class="mb-4">Nay Paing Soe</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





