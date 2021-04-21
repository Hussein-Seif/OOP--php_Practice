<?php


interface Shape
{
    public function area();
    public function diameter();

}

class Squer implements Shape
{
    public function __construct(private $len){}
    public function area()
    {
     return $this->len **2;
    }
    public function diameter()
    {
        return $this->len *4;
    }
    
}
$x =new Squer(44); 
echo $x->area();
echo "<hr>" ;
echo $x->diameter();