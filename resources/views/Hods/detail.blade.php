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
                    </h2>
                </div>
            </div>
            <div class="col-md-12 site-animate">
                @auth
                    @foreach($authors as $author)
                        <p class="lead">
{{--                            <a href="{{route('authors.show',['author' => $author->id])}}">--}}
                                <span style="font-size: 30px">Author:</span><span style="font-size:30px">{{$author->name}}</span>
{{--                            </a>--}}
                        </p>

                    @endforeach
                @endauth
                <p class="lead"><span style="font-size: 30px">Major:</span><span style="font-size:30px">{{$major}}</span></p>
                <p class="lead"><span style="font-size: 30px">Abstract</span></p>
                <p class="lead" style="text-align: justify !important; margin-left: 18%">
                    <span style="padding-left: 50px; padding-bottom: 15px">
                        {{$document->abstract}}
                    </span>
                </p>

                <p  class="mb-0" ><a href="{{route('file.download',['name' => $document->filename])}}" class="btn btn-primary btn-lg">Download PDF</a></p>
                    @if(!$document->approved)
                <p  class="mb-0" ><a href="{{route('hods.approve',['document' => $document->id])}}" class="btn btn-primary btn-lg">Approve PDF</a></p>
                    @endif
                <p class="lead">
                <p style="font-size: 30px">Submission History</p>
                @foreach($histories as $history)
                    <a href="">- {{$history->title}}</a>
                    @endforeach
                    </p>
                    <p class="lead">
                    <p style="font-size: 30px">Uploader</p>
                    @auth
                        <p>- {{$owner->name}}</p>
                    @endauth
                        </p>



            </div>

        </div>
    </section>


    @endsection
