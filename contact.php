<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br/>
    <input type="text" name="mobile" placeholder="mobile num" maxlength=10 pattern="[0-9]{10}"><br/>
    <input type="email" name="email" placeholder="abc@gmail.com" required><br/>
    <input type="submit" value="submit">
    </form>
</body>
</html>
<?php

require 'mailsend.php';
if(!empty($_POST['username']&&!empty($_POST['email'])))
{
$username=$_POST['username'];
$emailid= $_POST['email'];
sendemail($username,$emailid);
}

?>