<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body> 
    <form action="{{ route('auth.check') }}" method="post">
        @csrf
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password"> 
        <button type="submit">Login</button>
        <a href="register">Create New Account</a>
    </form>
</body>
</html>