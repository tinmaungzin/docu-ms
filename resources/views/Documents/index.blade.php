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


<ul>
    @foreach($documents as $document)
        <li>
            @auth
                <a href="{{route('documents.show',['document' => $document->id])}}">{{$document->title}}</a>

            @endauth
            @guest
                    <a href="{{route('documents.guestShow',['document' => $document->id])}}">{{$document->title}}</a>
                @endguest
        </li>
    @endforeach
</ul>

</body>
</html>
