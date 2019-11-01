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

<br>
<p>{{$author->name}}</p>
<p>Documents</p>
    @auth
        @foreach($documents as $document)
        <a href="{{route('documents.show',['document' => $document->id])}}">{{$document->title}}</a>

            @endforeach
        @endauth

@guest
    @foreach($documents as $document)
        <a href="{{route('documents.guestShow',['document' => $document->id])}}">{{$document->title}}</a>

    @endforeach
    @endguest

</body>
</html>
