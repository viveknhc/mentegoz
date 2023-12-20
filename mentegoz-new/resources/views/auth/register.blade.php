<style type="text/css">
    *{
    box-sizing: border-box;
}
body{
    height: 100vh;
    background-color: rgb(230, 230, 230);
    display: flex;
    align-items: center;
    justify-content: center;
}
.form{
    width: 420px;
    height: 520px;
    padding-top: 60px;
    background-color: rgb(230, 230, 230);
    border: rgb(255, 255, 255) 3px solid;
    border-radius: 0px 50px 0px 50px;
    box-shadow: 15px 15px 20px 5px rgba(119, 119, 119, 0.3),
                -15px -15px 20px 5px rgba(255, 255, 255, 0.8),
                inset 5px 5px 20px 5px rgba(119, 119, 119, 0.3),
                inset -15px -15px 20px 5px rgba(255, 255, 255, 0.8);
}
.top-text, .username,.email, .password, .submit{
    display: block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    outline: none;
}
.top-text{
    font-size: 80px;
}
.username,.email, .password{
    font-size: 15px;
    margin-top: 50px;
    padding: 15px;
    background-color: rgb(233, 231, 231);
    width: 350px;
    border-radius: 30px;
    border: solid 3px rgb(255, 255, 255);
    box-shadow: inset 10px 10px 20px 0px rgba(119, 119, 119, 0.3),
                inset -10px -10px 20px 0px rgba(255, 255, 255, 0.8),
                15px 15px 20px 5px rgba(119, 119, 119, 0.3),
                -15px -15px 20px 5px rgba(255, 255, 255, 0.8);
                text-align: left;
}
.submit{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 20px;
    padding: 8px 15px;
    margin-top: 50px;
    background-color: rgb(233, 231, 231);
    transition: 0.5s;
    border: solid 3px rgba(255, 255, 255, 0);
    border-radius: 30px;
    color: rgb(0, 0, 0);
    text-shadow: 0 0 1px rgb(68, 68, 68);
}
.submit:hover{
    border: solid 3px rgb(255, 255, 255);
    box-shadow: 15px 15px 20px 5px rgba(119, 119, 119, 0.3),
                -15px -15px 20px 5px rgba(255, 255, 255, 0.8);
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Mentegoz</title>
</head>
<body>
<div class="container">
<form method="POST" action="{{ route('register') }}">
    @csrf
<span class="top-text">Register</span>
<input id="name" type="text" class="username form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<input id="email" type="email" class="email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<input id="password" type="password" class="password form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<input id="password-confirm" type="password" class="password form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
<input type="submit" class="submit" value="Submit">
</form>
</div>
</body>
</html>