<?php

class MyParent 
{
    public $name='hussein';

}

class Child extends MyParent
{
    public function test()
    {
        echo "$this->name";
    }
}
$p1=new Child;
echo  $p1->name;