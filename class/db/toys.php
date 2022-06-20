<?php
require_once __DIR__ .'/items.php';

class Toys extends items{
  private $animal;
  private $size;

  public function setAnimal($_animal){
    $this->animal = $_animal;
  }

  public function getAnimal(){
    return $this->animal;
  }

  public function setSize($_size){
    $this->size = $_size;
  }

  public function getSize(){
    return $this->size;
  }
}