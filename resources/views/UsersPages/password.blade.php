
<!DOCTYPE html>
<html>


<body>
<form method="POST" action="{{route('forgetPass')}}">
    {!! csrf_field() !!}
    <input type="email" name="email">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
