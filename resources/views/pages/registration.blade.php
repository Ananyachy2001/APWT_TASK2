@extends('layouts.app')
@section('content')

<html >
<head>
    <title></title>
</head>
<body>
    <form action="{{'registration'}}" method="post">
{{csrf_field()}}
<div>
            <span>First Name:</span>
            <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control">
            @error('firstname')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Last Name:</span>
            <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control">
            @error('lastname')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>


<div>
            <span>Username:</span>
            <input type="text" name="username" value="{{old('username')}}" class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Email:</span>
            <input type="email" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Date Of Brith:</span>
            <input type="text" name="dob" value="{{old('dob')}}" class="form-control">
            @error('dob')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

<div>
            <span>Address:</span>
            <input type="text" name="address" value="{{old('address')}}" class="form-control">
            @error('address')
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

<div>
            <span>Confirm Password:</span>
            <input type="password" name="cpassword" value="{{old('cpassword')}}" class="form-control">
            @error('cpassword')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<input type="submit" name="Register">

</form>
    
</body>
</html>

@endsection