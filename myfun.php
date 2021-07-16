<?php

class Person{
    public function __destruct()
    {
         echo "this is destructor";
    }
    public function __construct()
    {
        print "this is constructor<br/>";
    }
}
$obj=new Person();

?>