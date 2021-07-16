<?php
// Associative array
$studcourse=array("kowsalya"=>"C","bhargavi"=>"python","logeshwari"=>"php");
// echo "logeshwari course  ".$studcourse["logeshwari"];
foreach($studcourse as $k=>$v)
{
    echo "key:".$k." value:".$v."<br/>";
}
// echo count($studcourse);
?>