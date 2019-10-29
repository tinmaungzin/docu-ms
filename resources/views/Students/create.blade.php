<html>
    <body>
        <form action="{{route('students.store')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <span>{{$errors->first('name')}}</span>
            <input type="email" name="school_mail" placeholder="School Email">
            <span>{{$errors->first('school_mail')}}</span>

            <input type="password" name="password" placeholder="Password">
            <span>{{$errors->first('password')}}</span>

            <input type="password" name="confirm_password" placeholder="Comfirm Password">
            <span>{{$errors->first('confirm_password')}}</span>

            <input type="text" name="student_id" placeholder="Student Id">
            <span>{{$errors->first('student_id')}}</span>

            <select name="major_id" id="">
                @foreach($majors as $major)
                    <option value="{{$major->id}}">{{$major->name}}</option>
                @endforeach
            </select>
            <input type="text" name="roll_no" placeholder="Roll No.">
            <span>{{$errors->first('roll_no')}}</span>

            <button type="submit">Register</button>
        </form>
    </body>
</html>
