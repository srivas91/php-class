<?php
class Bank
{
    public function deposit()
    {
          printf("deposit function");
    }
    public function withdraw()
    {
         printf("withdraw function");
    }
    public function balance()
    {
        printf("\n balance");
    }
}
class IndianBank extends Bank
{
     
}
class StateBank extends Bank
{
     
}

$obj1=new IndianBank();
$obj1->deposit();
echo "<br/>";
$obj2=new StateBank();
$obj2->withdraw();
?>