<html >
<head>
    <title></title>
</head>
<body>
    <form action="/register" method="post">
{{csrf_field()}}
Userame: <input type="text" name="username"> <br>
Password: <input type="password" name="Password"> <br>
Profession: <input type="text" name="profession"><br>
Address: <input type="text" name="address"><br>
<input type="submit" name="submit">

</form>
    
</body>
</html>