<?php

include_once("./iAutoBuilder.php");
include_once("./model/Auto.php");
include_once("./model/Motor.php");

class FortBuilder implements iAutoBuilder{

  private Auto $auto;
  function __construct(){
    $this->auto = new Auto();
  }

  public function buildModelo(){
    $this->auto->setModelo("ModeluoFord");
  }
  public function buildMarca(){
    $this->auto->setMarca("Ford");
  }
  public function buildCantidad_puertas(){
    $this->auto->setCantidad_puertas(4);
  }
  public function buildMotor(){
    $motor = new Motor(103,"13 FrDm");
    $this->auto->setMotor($motor);
  }


  /**
   * Get the value of auto
   */ 
  public function getAuto()
  {
    return $this->auto;
  }
}