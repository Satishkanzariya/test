<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register" method="post">
    
    {{csrf_field()}}
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <input type="text" name="email" id="" required placeholder="Email"><br/><br/>
    <input type="text" name="password" id="" required placeholder="Password"><br/><br/>
    <input type="text" name="confirmPassword" id="" required placeholder="confirm Password">    <br/><br/>
    <input type="radio" name="gender" id="" value='Male'><br/><br/>
    <input type="radio" name="gender" id="" value="Female"><br/><br/>    
    <button type="submit">Register</button>
</form>
</body>
</html>