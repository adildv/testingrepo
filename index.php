<?php
class Class1
{

  function __construct()
  {
      echo 'im construct from 1 ';
  }
  function fun1()
  {
      echo '<br>hey im fun1';
  }
}

class Class2 extends Class1
{
    function __construct()
    {
        echo 'im constr from okay from branch okay';
        parent::__construct();

    }   
}


$obj2 = new Class2();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
echo $obj2->fun1();
?>
