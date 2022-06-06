<?php

include_once("./iAutoBuilder.php");

class AutoDirector{
  
  public $builder;

  public function setAutoBuilder(iAutoBuilder $auto){
    $this->builder = $auto;
  }

  public function constructAuto(){
    $this->builder->buildModelo();
    $this->builder->buildMarca();
    $this->builder->buildCantidad_puertas();
    $this->builder->buildMotor();
  }

  public function to_string(){
    return $this->builder->getAuto()->getMarca();
  }
  


}