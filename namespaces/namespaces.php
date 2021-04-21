<?php 
namespace one;
class User
{
    public function __construct(public $name)
    {
        echo "hello : $this->name  from name spaces one <br/>";
    }
}

$hello=new User("Hussein");