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
    <a href="{{route('students.show',['student' => $document->owner_id])}}">{{$owner->name}}</a>

@endauth

@guest
    <a href="{{route('students.guestShow',['student' => $document->owner_id])}}">{{$owner->name}}</a>
@endguest
    <a href="{{route('file.download',['name' => $document->filename])}}">Download</a>

</body>
</html>
