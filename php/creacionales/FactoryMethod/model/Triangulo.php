<?php 

abstract class Triangulo{
  private $ladoA;
  private $ladoB;
  private $ladoC;

  function __construct($ladoA, $ladoB, $ladoC)
  {
    $this->ladoA = $ladoA;
    $this->ladoB = $ladoB;
    $this->ladoC = $ladoC;
  }

  public abstract function context();
}