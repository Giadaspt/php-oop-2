<?php
require_once __DIR__ . "/Payment.php";

class PayCard extends Payment {
  private $cardNumb;
  private $exparing;
  private $cvv;
  private $owner;

  function __construct($type, $_cardNumb, $_exparing)
  {
    parent::__construct($type);
    $this->cardNumb = $this->cardNumber($_cardNumb);
    $this->exparing = $this->cardExpired($_exparing);
  }

  public function setCardNumb( $_cardNumb){
    $this->cardNumb = $this->cardNumber($_cardNumb);
  }
  public function setExparing( $_exparing){
    $this->exparing = $this->cardExpired($_exparing);
  }
  public function setCvv( $_cvv){
    $this->cvv = $_cvv;
  }
  public function setOwner( $_owner){
    $this->owner = $_owner;
  }


  public function getCardNumb(){
    return $this->cardNumb ;
  }
  public function getExparing(){
    return $this->exparing ;
  }
  public function getCvv( ){
    return $this->cvv;
  }
  public function getOwner(){
    return $this->owner;
  }


  private function cardNumber($cardNumb){
    if(!is_int($cardNumb) || strlen($cardNumb) != 12){
      throw new Exception("I caratteri devono essere docicie e tutti numeri");
    }
    return $cardNumb;
  }

  private function cardExpired(){
    $date= date("m/Y");

    if($date == $this->exparing){
      return "La tua carta è scaduta";
    }
    
  }
}