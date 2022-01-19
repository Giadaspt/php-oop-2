<?php

class User {
  private $name;
  private $lastname;
  private $date_of_birth;
  private $age;
  private $address;
  protected $cart = [];
  protected $typeOfUser= "";
  protected $discount = 0;

  function __construct($_name, $_lastname)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }
  public function setDob($_date_of_birth){
    $this->date_of_birth= $_date_of_birth;
  }
  public function setAge($_age){
    $this->age = $_age;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function addProductToCart($_cart){
    $this->cart[] = $_cart;
  }
  public function setTypeOfUser($_typeOfUser){
    $this->typeOfUser = $_typeOfUser;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }


  public function getName(){
    return $this->name ;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function getDob(){
    return $this->date_of_birth;
  }
  public function getAge(){
    return $this->age;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getCart(){
    return $this->cart;
  }
  public function getTypeOfUser(){
    return $this->typeOfUser;
  }
  public function getDiscount(){
    return $this->discount;
  }



  public function customerDiscount(){
    $this->date_of_birth = date("19/01");

    $date = date("d/m");

    if($this->date_of_birth == $date){
      return "Tanti Auguri! In regalo per te uno sconto del 25%";
    }

  }
}