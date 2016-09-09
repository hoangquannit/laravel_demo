<html lang="en">
<head>
    <title>Laravel demo</title>
    <meta charset="utf-8">
</head>
<body>
<h2> Login form :</h2>
<form method="POST" action={{url('/auth/login')}}>
    {!! csrf_field() !!}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <ul>
        <li>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="email"/>
        </li>
        <li>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="password"/>
        </li>
        <li>
            <input type="checkbox" name="remember"/><span>Remember me</span>
            <button type="submit">Submit</button>
        </li>
    </ul>
</form>
</body>
</html>