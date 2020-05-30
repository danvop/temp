<?php
class A
{
  private function operation1()
  {
    echo "operation1 called";
  }
  protected function operation2()
  {
    echo "operation2 called";
  }
  public function operation3()
  {
    echo "operation3 called";
  }
}

class B extends A
{
  function __construct()
  {
    //$this->operation1();
    $this->operation2();
    $this->operation3();
    //$this->operation4();
  }
  
}
$b = new B;
@$b->operation2();
$b->operation3();