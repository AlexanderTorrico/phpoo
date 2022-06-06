<?php

include_once("./iAutoBuilder.php");
include_once("./model/Auto.php");
include_once("./model/Motor.php");

class FiatBuilder implements iAutoBuilder{

  private Auto $auto;
  function __construct(){
    $this->auto = new Auto();
  }

  public function buildModelo(){
    $this->auto->setModelo("ModeluoF");
  }
  public function buildMarca(){
    $this->auto->setMarca("Fiat");
  }
  public function buildCantidad_puertas(){
    $this->auto->setCantidad_puertas(2);
  }
  public function buildMotor(){
    $motor = new Motor(3,"55 clrm");
    $this->auto->setMotor($motor);
  }

  public function getAuto()
  {
    return $this->auto;
  }

}