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
    $this->cardNumb = $_cardNumb;
    $this->exparing = $_exparing;
  }

  public function setCardNumb( $_cardNumb){
    $this->cardNumb = $_cardNumb;
  }
  public function setExparing( $_exparing){
    $this->exparing = $_exparing;
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

  public function cardExpired(){
    $date= date("d/m/Y");

    if($date == $this->exparing){
      return "La tua carta è scaduta";
    }
    
  }
}