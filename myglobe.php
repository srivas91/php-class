<?php
$x=10;

function add($y,$z)
{
    $a=25;
    echo $a;
    $GLOBALS['x']=$y+$z;
}

add(15,25);
echo $x;
echo $a;

?>