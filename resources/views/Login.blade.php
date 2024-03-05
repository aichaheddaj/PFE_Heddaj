
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">

</head>
<style>
    .alert{
        color:red;
        
    }
</style>

<body>
    <div class="container" id="main">
    <div class="sign-in">
            <form action="{{route('loginuser')}}" method="post">
            @csrf  

            @if(Session::has('success'))
<div class="alert "role="alert">
{{Session::get('success')}}
</div>
@endif
@if(Session::has('fail'))
<div class="alert " role="alert">
{{Session::get('fail')}}
</div>
@endif
            <h1 class="text-stone-500 text-lg">Sign in</h1>

        <input type="email" name="email" value="{{old('email')}}" placeholder="Email" >
        <br><br>
        
        <span style="color:red;">
@error('email'){{$message}}@enderror </span>
        <input type="password" name="password" value="{{old('password')}}" placeholder="Password" >
        <span style="color:red;">
@error('password'){{$message}}@enderror </span>
        <button class="animate-bounce">Sign In</button>
        </form>
    

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-right">
                <h1>Hello, Friend</h1>
                <p>Enter your personnal details and start journey with us</p>
            </div>
        </div>
    </div>
</div>
</body>

</html>