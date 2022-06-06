<?php

include_once("./model/Motor.php");

class Auto{
  private int $cantidad_puertas;
  private string $modelo;
  private string $marca;
  private Motor $motor;



  

  /**
   * Get the value of cantidad_puertas
   */ 
  public function getCantidad_puertas()
  {
    return $this->cantidad_puertas;
  }

  /**
   * Set the value of cantidad_puertas
   *
   * @return  self
   */ 
  public function setCantidad_puertas($cantidad_puertas)
  {
    $this->cantidad_puertas = $cantidad_puertas;

    return $this;
  }

  /**
   * Get the value of modelo
   */ 
  public function getModelo()
  {
    return $this->modelo;
  }

  /**
   * Set the value of modelo
   *
   * @return  self
   */ 
  public function setModelo($modelo)
  {
    $this->modelo = $modelo;

    return $this;
  }

  /**
   * Get the value of marca
   */ 
  public function getMarca()
  {
    return $this->marca;
  }

  /**
   * Set the value of marca
   *
   * @return  self
   */ 
  public function setMarca($marca)
  {
    $this->marca = $marca;

    return $this;
  }

  /**
   * Get the value of motor
   */ 
  public function getMotor()
  {
    return $this->motor;
  }

  /**
   * Set the value of motor
   *
   * @return  self
   */ 
  public function setMotor($motor)
  {
    $this->motor = $motor;

    return $this;
  }
}