<?php

class Shop {
  private $name;
  private $store;
  private $cart;
  private $discount;

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
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  public function getStore(){
    return $this->store;
  }
  public function getCart(){
    return $this->cart;
  }
  public function getDiscount(){
    return $this->discount;
  }
  public function getName(){
    return $this->name;
  }


}