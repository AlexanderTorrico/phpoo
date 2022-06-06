<?php

include_once("./Animal.php");

class Gato extends Animal{

  function __construct()
  {
    $this->setSonido("Miau ---!!!!!!!");
  }

}