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
