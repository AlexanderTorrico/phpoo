<?php

include_once("./Animal.php");

class Perro extends Animal{

  function __construct()
  {
    $this->setSonido("Guau ---!!!!!!!");
  }

}