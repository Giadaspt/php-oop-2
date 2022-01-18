<?php
require_once __DIR__ . "/Shop.php";

class ShopProduct extends Shop {
  private $price;
  private $description;

  function __construct($_name, $_price, $_description)
  {
    parent::__construct($_name);
      $this->price = $_price;
      $this->description = $_description;
  }

  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDescription($_description){
    $this->description = $_description;
  }

  public function getPrice(){
    return $this->price;
  }
  public function getDescription(){
    return $this->description;
  }
}