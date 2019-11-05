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
