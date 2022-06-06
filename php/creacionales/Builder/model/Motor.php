<?php


class Motor{
  private int $numero;
  private string $potencia;

  function __construct($numero, $potencia)
  {
    $this->numero = $numero;
    $this->potencia = $potencia;
  }

  /**
   * Get the value of numero
   */ 
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of numero
   *
   * @return  self
   */ 
  public function setNumero($numero)
  {
    $this->numero = $numero;

    return $this;
  }

  /**
   * Get the value of potencia
   */ 
  public function getPotencia()
  {
    return $this->potencia;
  }

  /**
   * Set the value of potencia
   *
   * @return  self
   */ 
  public function setPotencia($potencia)
  {
    $this->potencia = $potencia;

    return $this;
  }
}