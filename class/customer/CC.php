<?php



class CC{
  private $number;
  private $dateY;
  private $dateM;
  private $name;
  private $cvv;

  public function __construct($_number, $_dateY, $_dateM, $_name, $_cvv){
    $this->number= $_number;
    $this->checkDate($_dateY, $_dateM);
    $this->dateY=$_dateY;
    $this->dateM=$_dateM;
    $this->name=$_name;
    $this->cvv=$_cvv;
  }


  private function checkDate($_date_y, $_date_m){
    $currentYear = date("Y");
    $currentMonth = date("n");


    $valid_date = true;

    if($currentYear > $_date_y)
    {
      $valid_date = false;
    }

    if($currentYear == $__date_y){

      if($currentMonth > $_date_m){
        $valid_date = false;
      }
    }

    if(!$valid_date ){
      throw new Exception('Carta di credito scaduta');
    }

  }


  public function geTNumber(){
    return $this->number;
  }
  public function getDateY(){
    return $this->dateY;
  }
  public function getDateM(){
    return $this->number;
  }
  public function getName(){
    return $this->name;
  }
  public function getCvv(){
    return $this->cvv;
  }

}
 

?>