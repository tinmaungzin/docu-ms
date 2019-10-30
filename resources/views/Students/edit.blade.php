<html>
<body>
<form action="{{route('students.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$student->name}}">
    <span>{{$errors->first('name')}}</span>
    <input type="email" name="school_mail" placeholder="School Email" value="{{$student->school_mail}}">
    <span>{{$errors->first('school_mail')}}</span>

    <input type="text" name="student_id" placeholder="Student Id" value="{{$student->student_id}}">
    <span>{{$errors->first('student_id')}}</span>

    <select name="major_id" id="">
        @foreach($majors as $major)
            <option value="{{$major->id}}" @if($student->major_id== $major->id) selected @endif>{{$major->name}}</option>
        @endforeach
    </select>
    <input type="text" name="roll_no" placeholder="Roll No." value="{{$student->roll_no}}">
    <span>{{$errors->first('roll_no')}}</span>

    <button type="submit">Update</button>
</form>

<p>Bookmark</p>
@foreach($bookmarkeds as $bookmarked)
    <a href="{{route('documents.show',['document' => $bookmarked->id])}}">{{$bookmarked->title}}</a>
    @endforeach
</body>
</html>
