<?php
//  Indexed array
$technologies=array("blockchain","bigdata","virual reality");
// echo "I like ".$technologies[0]." &nbsp; and &nbsp;".$technologies[2]."&nbsp; technology";
for($i=0;$i<count($technologies);$i++)
{
    echo $technologies[$i]."<br/>";
}
?>