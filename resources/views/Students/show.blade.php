<html>
<body>
<header>
    <a href="">Login</a>
    <a href="{{route('students.create')}}">Register</a>
    <a href="{{route('documents.create')}}">Upload</a>
    <a href="">Edit Profile</a>
</header>

<p>{{$student->name}}</p>
<p>{{$student->major->name}}</p>

<p>Upload History</p>
<ul>
    @foreach($documents as $document)
        <li>
            <a href="/documents/{{$document->id}}">{{$document->title}}</a>

        </li>
        @endforeach
</ul>

</body>
</html>
