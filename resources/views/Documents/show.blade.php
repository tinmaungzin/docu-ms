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
    <a href="/students/{{$document->owner_id}}">{{$owner->name}}</a>
    <a href="/file/{{$document->filename}}">Download</a>

</body>
</html>
