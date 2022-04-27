<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <form action="dologinchk" method="post" id="myform">
        {{ csrf_field()  }}
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
        <input type="text" name="txtEmail"  id="txtEmail" placeholder="Email" required>
        <input type="text" name="txtpwd" id="txtpwd" placeholder="Password" required>
        <input type="submit" value="Submit" >
    </form>
    
        
</body>
</html>