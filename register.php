<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="register.php" method="post">
    <input type="text" name="username" placeholder="enter username"><br/>
    <input type="password" name="password" placeholder="enter password"><br/>
    <input type="text" name="mobile" placeholder="mobile number"><br/>
    <input type="email" name="email" placeholder="abc@gmail.com"><br/>
    <input type="submit" value="register">
    <input type="reset" value="cancel">
    </form>
</body>
</html>
<?php
if(isset($_POST['username']))
{
   $user=$_POST['username'];
   echo $user;
}
?>