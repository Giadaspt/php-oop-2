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
    $this->exparing = $_exparing;
  }

  public function setCardNumb( $_cardNumb){
    $this->cardNumb = $this->cardNumber($_cardNumb);
  }
  public function setExparing( $_exparing, $_m, $_y){
    $this->exparing = $this->cardExpired($_exparing, $_m, $_y);
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

  private function cardExpired($y, $m){
    $date= date("m/Y");

    
    if(!is_int($y) || !is_int($m)){
      throw new Exception("Devi inserire dei numeri"); 
    }
    
    if($m>12 || $m<1){
      throw new Exception("Inserisci un mese valido");
    }
    
    if($date >= $this->exparing){
      throw new Exception("La tua carta è scaduta") ;
    }
    
    $this-> checkDate($y, $m);
  }

  private function checkdate($y, $m){
    $expM = $m + 1;
    $expY = $y;

    if($expM > 12){
      $expM = 1;
      $expY = $y + 1;
    }

    if(!checkdate($expM,1,$expY)){
      throw new Exception('La data non è valida');
    }

    return date("$expM/$expY");
  }
}