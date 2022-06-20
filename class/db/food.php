<?php
require_once __DIR__ .'/items.php';

class Food extends items{
  private $ingredients;
  private $expiration;

  public function setIngredients($_ingredients){
    $this->ingredients = $_ingredients;
  }

  public function getIngredients(){
    return $this->ingredients;
  }

  public function setExpiration($_expiration){
    $this->expiration = $_expiration;
  }

  public function get_expiration(){
    return $this->expiration;
  }
}

