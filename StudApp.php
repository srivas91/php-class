<?php
include "myexam.php";

class Person
{
    protected $id;
    protected $name;
    public function __construct($a,$b)
    {
        $this->id=$a;
        $this->name=$b;
    }
    public function display()
    {
        echo "id:".$this->id." name:".$this->name;
    }
}
class Student extends Person{
    use Exam;
    private $course;
    public function __construct($a,$b,$c,$d,$e)
    {
        Person::__construct($a,$b);
        $this->course=$c;
        $this->mark1=$d;
        $this->mark2=$e;
    }
    public function show()
    {
        Parent::display();
        echo " course:".$this->course." Mark1:".$this->mark1." Mark2:".$this->mark2;
    }
}
$obj1=new Student(101,"bhargavi","PHP",78,93);
$obj2=new Student(102,"kowsalya","PHP",84,90);
$obj3=new Student(103,"logeshwari","PHP",76,95);
$obj1->show();
echo "<br/>";
$obj2->show();
echo "<br/>";
$obj3->show();
?>