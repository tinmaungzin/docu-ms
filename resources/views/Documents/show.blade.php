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
            @if(Session::has('msg'))
                <p style="text-align: center;" class="alert-success">{{ Session::get('msg') }}</p>
            @endif
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



                    @auth
                        @if(\Illuminate\Support\Facades\Auth::user()->id!= $document->owner_id)
                            @if($bookmark->count()>0)
                                <div class = "bookMarkButton">
                                    <span  class="mb-0" ><a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}" class="btn btn-primary btn-lg" style = "background-color: white; color:black ">Bookmarked</a></span>
                                </div>
                            @else
                                <div class = "bookMarkButton">
                                    <span  class="mb-0" ><a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}" class="btn btn-primary btn-lg">Bookmark</a></span>
                                </div>
                            @endif
                        @endif
                    @endauth
                </div>
                <div class = "documentAbstract">
                    <h3><span>Abstract</span></h3>
                </div>
                <p class="lead" id="individualabstract" style="text-align: justify !important;margin-left: 80px">
                    <span style="padding-left: 50px; padding-bottom: 15px">
                        {{$document->abstract}}
                    </span>
                </p>

                <div class = "documentDetails">
                    <p  class="mb-0" ><a href="{{route('file.download',['name' => $document->filename])}}" class="btn btn-primary btn-lg">Download PDF</a></p>
                    @auth
                        @if(\Illuminate\Support\Facades\Auth::user()->id== $document->owner_id)
                            <p  class="mb-0" ><a href="{{route('documents.edit',['document' => $document->id])}}" class="btn btn-primary btn-lg">Edit Document</a></p>
                        @endif
                    @endauth
                </div>
                <p class="display-4"><span style="font-size: 30px">Submission History</span></p>
                @foreach($histories as $history)
                    <a href="">- {{$history->title}}</a>
                @endforeach

                <div class = "uploaderName">
                    <p class="display-4"><span style="font-size: 30px">Uploader</span></p>
                        @auth
                                <a href="{{route('students.show',['student' => $document->owner_id])}}">- {{$owner->name}}</a>

                            @endauth

                            @guest
                                <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">- {{$owner->name}}</a>
                                @endguest
                </div>
                <p class="display-4"><span style="font-size: 30px">Keywords</span></p>
                <span style="background-color: #bdb9b7; padding: 3px;">convolution</span>

            </div>

        </div>
    </section>



    <section class="bg-light" id="section_news">
        <div class="container">
            <p class="lead"><span style="font-size: 30px;padding-left:15px">Recommendation</span></p>
        </div>
    </section>

@endsection





