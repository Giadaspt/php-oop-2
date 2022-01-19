<?php

trait Address {
  public $streetName;
  public $postCode;
  public $town; 
  public $country;


  public function setStreetName($_streetName){
    $this->streetName = $_streetName;
  }
  public function setPostCode($_postCode){
    $this->postCode = $_postCode;
  }
  public function setTown($_town){
    $this->town = $_town;
  }
  public function setCountry($_country){
    $this->country = $_country;
  }
  
  public function gfetStreetName(){
    return $this->streetName ;
  }
  public function getPostCode($postCode){
    return $this->postCode = $this->postCodeNumb($postCode) ;
  }
  public function getTown(){
    return $this->town;
  }
  public function getCountry(){
    return $this->country ;
  }

  public function getGenericAddress(){
    return "$this->streetName, $this->town, $this->country";
  }

  public function getAddressShipping(){
    return "$this->streetName, $this->town, $this->postCode,$this->country";
  }

  // public function postCodeNumb($postCode){
  //   if(!is_int($postCode) ){
  //     throw new Exception("Il codice postale deve avere 5 numeri");
  //   }
  //   return $postCode;
  // }

}