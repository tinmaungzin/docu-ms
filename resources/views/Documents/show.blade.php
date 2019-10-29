<html>
<body>
<header>
    @if(\Illuminate\Support\Facades\Auth::user())
        <a href="{{route('documents.create')}}">Upload</a>
        <a href="">Edit Profile</a>
        <a href="{{route('login.logout')}}">Logout</a>

    @else
        <a href="">Login</a>
        <a href="{{route('students.create')}}">Register</a>
    @endif

</header>

    <p>{{$document->title}}</p>
    <p>{{$document->abstract}}</p>
    <a href="/students/{{$document->owner_id}}">{{$owner->name}}</a>
    <a href="/file/{{$document->filename}}">Download</a>

</body>
</html>
