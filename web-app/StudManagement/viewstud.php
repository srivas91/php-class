<?php
include('dataconnect.php');
$viewquery="select * from student";
$result=$con->query($viewquery);
if($result->num_rows>0)
{
    echo "<table border=5 align='center'><tr>";
    echo "<th>Stuid</th>";
    echo "<th>Name</th>";
    echo "<th>Course</th>";
    echo "<th>Mobile Num</th>";
    echo "<th>Attendance</th></tr>";
    session_start();
     while($row=$result->fetch_assoc()){
        
        $myid=$row['stuid'];
         echo "<tr>";
         echo "<td>".$row['stuid']."</td>";
         echo "<td>".$row['stuname']."</td>";
         echo "<td>".$row['course']."</td>";
         echo "<td>".$row['mobile']."</td>";
         echo "<td>"."<a href='addattendance.php?stuid=$myid'>Add</a>"."</td>";
         echo "</tr>";
         
     }
     
}
?>