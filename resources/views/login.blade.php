<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" nam="submit">
</form>