<?php 

abstract class User
{
public function __construct(public $name ,public $age ,public $salary ){

}
public function great(){
    echo "Hello ya $this->name  Your age is $this->age";
}
abstract public function userData($data);

}

// New class 
class Teacher extends User
{
public $subject;
public function great(){
    echo "ezyak ya $this->name";
}
public function userData($data){
    echo "sadas $this->date";
}
}





// $hussein =new User("hussein ",22,2000);
// print_r($hussein);
// $hussein->great();
echo "<hr>" ;
$ahmed= new Teacher("ahmed",22,2000);
$ahmed->subject="back-end";
print_r($ahmed);
$ahmed->great();