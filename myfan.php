<?php
class Fan
{
     private $wings;
     public function __construct($a)   // constructor
     {
           $this->wings=$a;
     }
     public function rotate()
     {
         echo "this fan has ".$this->wings."wings<br/>";
     }
}

$usha=new Fan(3);
$surya=new Fan(2);
// $usha->wings=4;
$usha->rotate();
$surya->rotate();
?>


