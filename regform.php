<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="regform.php" method="get">
    <label for="username">Username</label><input type="text" name="username" id="username"><br/>
    <label for="password">Password</label><input type="password" name="password" id="password"><br/>
    <label for="repassword">Re-Password</label><input type="password" name="repassword" id="repassword"><br/>
    <label for="mobile">Mobile Number</label><input type="text" name="mobile" id="mobile"><br/>
    <label for="email">Email Id</label><input type="email" name="email" id="email"><br/>
    <input type="submit" value="register">
    <input type="reset" value="cancel">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['username'];
   if(empty($name))
   {
       echo "username is empty";
   }
   else
   {
       echo $name;
   }
}
else
{
    echo $_GET["username"];
}
?>