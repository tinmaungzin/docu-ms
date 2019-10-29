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

<p>{{$student->name}}</p>
<p>{{$student->major->name}}</p>

<p>Upload History</p>
<ul>
    @foreach($documents as $document)
        <li>

            @auth
                <a href="documents/{{$document->id}}">{{$document->title}}</a>
            @endauth
            @guest
                <a href="documents-guest/{{$document->id}}">{{$document->title}}</a>
            @endguest

        </li>
        @endforeach
</ul>

</body>
</html>
