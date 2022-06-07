<?php

include_once("./TrianguloFactory.php");


$obj = new TrianguloFactory();

//$triangulo = $obj->createTriangulo("equilatero");
$triangulo = $obj->createTriangulo("escaleno");

echo $triangulo->context();