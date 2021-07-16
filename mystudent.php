<?php
class Student
{
    private $id;
    private $name;
    private $course;
    public function __construct($a,$b,$c)
    {
        $this->id=$a;
        $this->name=$b;
        $this->course=$c;
    }
    public function showdetails()
    {
        print "Student id is".$this->id." &nbsp; name is".$this->name." &nbsp; course is".$this->course."<br/>";
    }
}

$obj1=new Student(101,"bhargavi","PHP");
$obj2=new Student(202,"kowsalya","python");
$obj1->showdetails();
$obj2->showdetails();
?>