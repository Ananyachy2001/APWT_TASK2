@extends('layouts.app')
@section('content')
<html >
<head>
    <title>Login</title>
</head>
<body>
<form action="{{'login'}}" method="post">
{{csrf_field()}}
<div>
            <span>username:</span>
            <input type="text" name="username" value="{{old('username')}}" class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

<div>
            <span>Password:</span>
            <input type="password" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>

<input type="submit" name="Login">

</form>
    
</body>
</html> 

@endsection