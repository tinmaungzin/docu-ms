@extends('layouts.master')
@section('content')

    <section class="site-cover" id="section-home">
        <div class="container-fluid" style="height: 85px; background-color: #e6e6e6;" >
            <div class="row align-items-center justify-content-center text-center site-vh-100">

            </div>
        </div>
    </section>

    <section class="site-section bg-light" >
        <div class="container">
            <div class="row">
                @foreach($documents as $document)
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="media d-block mb-4 text-center site-media site-animate">
                        <div class="media-body p-md-9 p-3">
                            <h5 class="mt-0 h4">{{$document->title}}</h5>
                            @foreach($document->authors as $author)
                            <p class="mb-4">{{$author->name}}</p>
                            @endforeach
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



@endsection
