<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datainsert.php" method="post">
    <input type="text" name="stuid" placeholder="student id"><br/>
    <input type="text" name="name" placeholder="student name"><br/>
    <input type="text" name="course" placeholder="course"><br/>
    <input type="submit" value="register">
    <input type="reset" value="cancel">
    </form>
</body>
</html>
<?php

$link = mysqli_connect("localhost", "root", "root", "mycol");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO student (stuid,name,course) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $stuid, $name, $course);
    
    // Set parameters
    $stuid = $_REQUEST['stuid'];
    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>