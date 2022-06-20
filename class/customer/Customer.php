<?php

class Customer{

  public $name;
  public $surname;
  public $email;
  public $cart;


  public function __construct($_name, $_surname, $_email, $_cart){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->cart = $_cart;
  }



}





?>