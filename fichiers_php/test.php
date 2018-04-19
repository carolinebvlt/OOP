<?php
class Test{
  private $free = true;
  private $marque;

  public function __construct($marque){
    $this->setMarque($marque);
    $this->free = self::is_free($this->marque);
  }

  public static function is_free($marque){
    return $bool = ($marque === "Audi") ? false : true;
  }

  public function setMarque($marque){
    if(is_string($marque)){
      $this->marque = $marque;
    }
  }
}

$test = new Test("Audi");
var_dump($test);

 
