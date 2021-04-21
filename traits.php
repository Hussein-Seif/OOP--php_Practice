<?php

trait A
{
    public function __construct(public $name)
    {
        echo "Hello $this->name";
    }
  
}

class C{
    use A;

}
$hussein=new C("hussein");