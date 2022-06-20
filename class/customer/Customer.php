<?php

class Customer{

  public $name;
  public $surname;
  public $email;


  public function __construct($_name, $_surname, $_email){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
  }



}

$customer1 = new Customer("Vasco","Bianchi","vaschissimo@gmail.com");


?>