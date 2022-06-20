<?php

class Customer{

  public $name;
  public $surname;
  public $email;
  public $cart;
  private $creditCard;
  private $dateCC;


  public function __construct($_name,$_surname,$_email,$_cart,$_creditCard,$_dateCC){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->cart = $_cart;
    $this->creditCard = $_creditCard;
    $this->dateCC = $_dateCC;
  }

  public function setcreditCard($_creditCard){
    $this->creditCard = $_creditCard;
  }

  public function setdateCC($_dateCC){
    $this->dateCC = $_dateCC;
  }

  public function getcreditCard(){
		return $this->creditCard;
	}

  public function getdateCC(){
		return $this->dateCC;
	}
}

?>