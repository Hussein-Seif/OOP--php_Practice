<?php 
namespace two;
class User
{
    public function __construct(public $name)
    {
        echo "hello : $this->name  from name spaces two <br/>";
    }
}

$hello=new User("Hussein");

// new class for login function

class login 
{
    public function __construct(public $i)
    {
        echo "Hello from Login $this->i <br/>";
    }
}
for ($i=0; $i <10 ; $i++) { 
    
    $l=new login($i);
    $hello=new User("Hussein");
}