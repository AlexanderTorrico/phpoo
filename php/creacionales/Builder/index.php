<?php

include_once("./AutoDirector.php");
include_once("./FortBuilder.php");
include_once("./FiatBuilder.php");


$builder = new AutoDirector();

//$auto = new FortBuilder();
$auto = new FiatBuilder();

$builder->setAutoBuilder($auto);
$builder->constructAuto();

echo $builder->to_string();