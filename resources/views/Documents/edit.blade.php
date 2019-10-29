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
<form action="{{route('documents.update',['document' => $document->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <select name="submajor_id" id="">
        @foreach($submajors as $submajor)
            <option value="{{$submajor->id}}" @if($document->submajor_id== $submajor->id) selected @endif>{{$submajor->name}}</option>
        @endforeach
    </select>
    <input type="text" hidden value="{{$major->id}}" name="major_id">
    <input type="text" hidden value="{{$student->id}}" name="owner_id">
    <input type="text" name="title" placeholder="Title" value="{{$document->title}}">
    <span>{{$errors->first('title')}}</span>

    <textarea name="abstract" id="" cols="30" rows="10" placeholder="Abstract">{{$document->abstract}}</textarea>
    <span>{{$errors->first('abstract')}}</span>

    <input type="file" name="pdf_file">
    <span>{{$errors->first('pdf_file')}}</span>

    <input type="text" name="author_name" placeholder="author_name" value="{{$document->author_name}}">
    <span>{{$errors->first('author_name')}}</span>



    <button type="submit">Save</button>
</form>
</body>
</html>
