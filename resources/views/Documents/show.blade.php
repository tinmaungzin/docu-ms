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

    <p>{{$document->title}}</p>
    <p>{{$document->abstract}}</p>
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


@auth
    <a href="{{route('students.show',['student' => $document->owner_id])}}">{{$owner->name}}</a>

@endauth

@guest
    <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">{{$owner->name}}</a>
@endguest
    <a href="{{route('file.download',['name' => $document->filename])}}">Download</a>

</body>
</html>
