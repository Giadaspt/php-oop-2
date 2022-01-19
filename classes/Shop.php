<?php
require_once __DIR__ ."/Address.php";


class Shop {

  use Address;

  private $name;
  private $store;
  private $cart;

  function __construct($_name)
  {
    $this->name = $_name;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setStore($_store){
    $this->store = $_store;
  }
  public function setCart($_cart){
    $this->cart = $_cart;
  }

  public function getStore(){
    return $this->store;
  }
  public function getCart(){
    return $this->cart;
  }
  public function getName(){
    return $this->name;
  }


}