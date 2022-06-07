<?php

include_once("./iTrianguloFactoryMethod.php");
include_once("./model/Equilatero.php");
include_once("./model/Escaleno.php");

class TrianguloFactory implements iTrianguloFactoryMethod{

  public function createTriangulo($tipo){

    if($tipo == "equilatero"){
      return new Equilatero(1,3,4);
    } else if($tipo == "escaleno"){
      return new Escaleno(8,1,5);
    }
  }
}