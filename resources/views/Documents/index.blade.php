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
            </div>
        </div>
    </section>

@endsection













