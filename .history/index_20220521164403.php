<?php
class Class1
{

  function __construct()
  {
      echo 'im construct from 1 ';
  }
  function fun1()
  {
      echo 'hey im fun1';
  }
}

class Class2 extends Class1
{
    function __construct()
    {
        echo 'im constr from okay okay';
        parent::__construct();

    }   
}


$obj2 = new Class2();
?>
