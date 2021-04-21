<?php


class User1
{
public $name,$age ,$salary;
public $type="user";
// methoud  greating User
public function great(){
    echo "Hello ya $this->name <br/> Your age is $this->age";
}
// methoud make the user is admin
public function makeAdmin(){
    $this->type="admin";
}
// methoud incrementAge
public function incrementAge($increase){
    $this->age=$this->age+$increase;
}
}

$hussein = new User1;
$hussein->name=" Hussein Seif";
$hussein->age=22;
$hussein->salary=2000;
print_r($hussein);
echo "<hr>" ;
echo "<br>" ;
$hussein->great();

$hussein->makeAdmin();
print_r($hussein);

echo "<hr>" ;
$hussein->incrementAge(20);

print_r($hussein);
echo "<br>" ;
$hussein->great();
// =============/



///  __construct Function

class NewUser
{
    // public $name,$age ,$salary;
    // public $type="user";
    // public function __construct($name,$age,$salary)
    // {
    //     $this->name=$name;
    //     $this->age=$age;
    //     $this->salary=$salary;
    // }

    # in php8 construct property promation
     function __construct(public $name ,public $age,public $salary )
    {
        
    }
}
echo "<hr>" ;
$hussein =new NewUser("duudud",22,2000);
print_r($hussein);