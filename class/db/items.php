<?php

class Item{

  public $title;
  public $price;
  public $description;
  public $category;

  public function __construct($_title, $_price, $_description){
    $this->title = $_title;
    $this->price = $_price;
    $this->description = $_description;
  }
}

?>