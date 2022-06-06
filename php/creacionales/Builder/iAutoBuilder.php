<?php

include_once("./model/Auto.php");

interface iAutoBuilder{

  public function buildModelo();
  public function buildMarca();
  public function buildCantidad_puertas();
  public function buildMotor();

  
}