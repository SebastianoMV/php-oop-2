<?php

require_once __DIR__ .'/CC.php';


class Customer{

  public $name;
  public $surname;
  public $email;
  public $cart;
  private $card;
  


  public function __construct($_name,$_surname,$_email,$_cart){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->cart = $_cart;
  }


  public function setCC($_number, $_dateY, $_dateM, $_name, $_cvv){
    try{
      $this->card = new CC($_number, $_dateY, $_dateM, $_name, $_cvv);
    }catch (Exception $e){
      echo $e->getMessage();
    }

  }
  
}

?>