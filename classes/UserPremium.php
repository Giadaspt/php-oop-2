<?php
require_once __DIR__ . "/User.php";

class UserPremium extends User {
  private $premium;

  function __construct($_name, $_lastname)
  {
    parent::__construct($_name, $_lastname);
    $this->discount = 15;
    $this->typeOfUser = "";
    $this->cart = [];
  }

  public function setPremium($_premium){
    $this->premium = $_premium;
  }


  public function getPremium(){
    return $this->premium ;
  }


  public function addProductToCart(...$product){
    $addToCart = parent::addProductToCart($product);
    return $addToCart;
  }

  public function setCustomerPremium($_discount){

    if($this->typeOfUser = ""){
       $_discount;
    } elseif($this->typeOfUser = "Silver"){
      $_discount = 10;
       $this->discount += $_discount;
    } else if ($this->typeOfUser = "Gold"){
      $_discount = 15;
       $this->discount += $_discount;
    }
    

  }
}