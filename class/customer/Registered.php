<?php
require_once __DIR__ .'/Customer.php';

class Registered extends Customer{
  private $discount;

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  public function getDiscount(){
    return $this->discount;
  }
}

?>