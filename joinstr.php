<?php
$wish=array('good','afternoon');
// echo implode(" ",$wish);  // join 
$word='madam';
$revword=strrev($word);
// echo $revword;
$value=strcmp($word,$revword);
if($value==0)
{
    echo $word.' is palindrome';
}
else
{
    echo $word.' is not palindrome';
}
?>
