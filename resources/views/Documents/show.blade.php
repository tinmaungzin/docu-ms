<html>
<body>
<header>

    @auth
           @include('layouts.auth_nav')
        @endauth

    @guest
           @include('layouts.guest_nav')
        @endguest

</header>

    <p>Title - {{$document->title}}</p>
    <p>Abstract - {{$document->abstract}}</p>
    <p>Edit History</p>
@foreach($histories as $history)
    <a href="">{{$history->title}}</a>
    @endforeach

<br>
@auth
    @if(\Illuminate\Support\Facades\Auth::user()->id== $document->owner_id)
        <a href="{{route('documents.edit',['document' => $document->id])}}">Edit Document</a>
        @endif

    @endauth
@auth
    @if(\Illuminate\Support\Facades\Auth::user()->id!= $document->owner_id)
        @if($bookmark->count()>0)
        <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">UnBOOkmark</a>
            @else
            <a href="{{route('bookmark.index',['student' => \Illuminate\Support\Facades\Auth::user()->id ,'document' => $document->id])}}">Bookmark</a>
                @endif
        @endif
    @endauth
<br>

@auth
@foreach($authors as $author)
    <a href="{{route('authors.show',['author' => $author->id])}}">Author - {{$author->name}}</a>
    <br>
    @endforeach
@endauth

@guest
    @foreach($authors as $author)
        <a href="{{route('authors.guestShow',['author' => $author->id])}}">Author - {{$author->name}}</a>
        <br>
    @endforeach
    @endguest
@auth
    <a href="{{route('students.show',['student' => $document->owner_id])}}">Uploader - {{$owner->name}}</a>
    <br>

@endauth

@guest
    <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">Uploader - {{$owner->name}}</a>
    <br>
@endguest
    <a href="{{route('file.download',['name' => $document->filename])}}">Download</a>

</body>
</html>
