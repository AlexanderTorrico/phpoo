<?php


class Animal{

  private $sonido = ""; 

  /**
   * Get the value of sonido
   */ 
  public function getSonido()
  {
    return $this->sonido;
  }

  /**
   * Set the value of sonido
   *
   * @return  self
   */ 
  public function setSonido($sonido)
  {
    $this->sonido = $sonido;

    return $this;
  }
}