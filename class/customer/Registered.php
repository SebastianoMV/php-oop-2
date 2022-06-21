<?php
require_once __DIR__ .'/Customer.php';

class Registered extends Customer{
  private $discount;
  private $password;

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function setPassword($_password){
    $this->password = $_password;
  }

  public function getPassword(){
    return $this->password;
  }

}

?>