<?php


abstract class Product{
    public $priceWithDiscoun ;
    public $allPrice;
    public function __construct(public $name ,public $price ,public $quantity)
    {
        $allPrice=$price*$quantity;
    }
    abstract public function setDiscount();
    abstract public function printDiscount();



}

class Labtop extends Product
{
     public function setDiscount(){
         $allPrice=$this->price*$this->quantity;
         $this->priceWithDiscoun = $this->allPrice-($this->price *.05);
         return $this;
     }
     public function printDiscount()
     {
         echo " lab name:$this->name <br>
         quantity:$this->quantity <br>
         Price Befour Dis:$this->price <br>
         pric after dis:$this->priceWithDiscoun
         
         ";
     }

}


class Mobile extends Product
{
    public function setDiscount(){
        $allPrice=$this->price*$this->quantity;
         $this->priceWithDiscoun = $allPrice-($this->price *.10);
        return $this;
    }
    public function printDiscount()
    {
        echo " mob name:$this->name <br>
        quantity:$this->quantity <br>
        Price Befour Dis:$this->allPrice <br>

        pric after dis:$this->priceWithDiscoun
        
        ";
    }
}
$samsong=new Mobile("s1",1000,2);
$samsong->setDiscount()->printDiscount();