<?php
$con=mysqli_connect('localhost','root','root','mycol');
if($con==false)
{
    die("Error:Could not connect".mysqli_connect_error());
}
else{
    echo "<center>connection success</center>";
}
$query="select * from student";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    echo "<table border=5 align='center'><tr>";
    echo "<th>Stuid</th>";
    echo "<th>Name</th>";
    echo "<th>Course</th>";
    // echo "<th>Location</th></tr>";
     while($row=mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$row['stuid']."</td>";
         echo "<td>".$row['name']."</td>";
         echo "<td>".$row['course']."</td>";
        //  echo "<td>".$row['location']."</td>";
         echo "</tr>";
     }
}
?>