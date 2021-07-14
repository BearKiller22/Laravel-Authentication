<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <form action="{{ route("auth.create")}}" method="post">
        <div>
            @if(Session::get('Succses')){
                {{ Session::get('Succses')}}
            }
            @endif
            @if(Session::get('Fail')){
                {{ Session::get('Fail')}}
            }
            @endif
        </div>
        @csrf
        <h1>Register</h1>
        <input type="text" name="username" placeholder="username" value="{{old('name')}}">
        <span>@error('name'){{$message}} @enderror</span>
        <input type="text" name="password" placeholder="Password"> 
        <span>@error('password'){{$message}} @enderror</span>
        <button type="submit">Register</button>
        <a href="login">Have An Account?</a>
    </form>
</body>
</html>