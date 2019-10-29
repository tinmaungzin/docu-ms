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
        <form action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="submajor_id" id="">
                @foreach($submajors as $submajor)
                    <option value="{{$submajor->id}}">{{$submajor->name}}</option>
                    @endforeach
            </select>
            <input type="text" hidden value="{{$major->id}}" name="major_id">
            <input type="text" hidden value="{{$student->id}}" name="owner_id">
            <input type="text" name="title" placeholder="Title">
            <textarea name="abstract" id="" cols="30" rows="10" placeholder="Abstract"></textarea>
            <input type="file" name="pdf_file">
            <input type="text" name="author_name" placeholder="author_name">
            <button type="submit">Upload</button>
        </form>
    </body>
</html>
