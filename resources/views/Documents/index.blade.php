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


<ul>
    @foreach($documents as $document)
        <li>
            <a href="documents/{{$document->id}}">{{$document->title}}</a>
        </li>
    @endforeach
</ul>

</body>
</html>
