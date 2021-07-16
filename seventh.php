<?php
$courses="java,PHP,python";
$mycourse=explode(",",$courses);  // String[]
foreach($mycourse as $c)
{
    echo $c."<br/>";
}
?>