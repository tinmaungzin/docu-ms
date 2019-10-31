<html>
<body>

<form action="login" method="post">
    @csrf
    <input type="text" name="school_mail" placeholder="School Mail">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>


</body>
</html>
