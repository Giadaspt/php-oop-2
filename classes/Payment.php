<?php

class Payment {
  private $type;
  
  function __construct($_type)
  {
    $this->type = $_type;
  }

  public function setType($_type){
    $this->type = $_type;
  }

  public function getType(){
    return $this->type;
  }

  public function payType(){
    if($this->type ){
      return "Quale metodo di pagamento preferisci? " ;
    }
  }
}