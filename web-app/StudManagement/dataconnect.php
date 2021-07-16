<?php
$con=new mysqli('localhost','root','root','college');
if($con==false)
{
    die("Error:Could not connect".mysqli_connect_error());
}
else{
    echo "<center>connection success</center>";
}
// $query="insert into student values";
// $result=mysqli_query($con,$query);
return $con;
?>
