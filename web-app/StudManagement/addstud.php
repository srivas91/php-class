<?php
include('dataconnect.php');

$stuid=$_POST['stuid'];
echo $stuid;
$stuname=$_POST['stuname'];
echo $stuname;
$course=$_POST['course'];
echo $course;
$mobile=$_POST['mobile'];
echo $mobile;


$stmt = $con->prepare("INSERT INTO student (stuid, stuname,course,mobile) VALUES (?, ?, ?,?)");
$stmt->bind_param("isss", $stuid, $stuname,$course, $mobile);
$stmt->execute();

echo "new student details added successfully";

?>