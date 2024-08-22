<?php
require_once "Carro.php";
require_once "Pessoa.php";

$c1 = new Carro("Gomes", "hb20", "hkz-3912");
$a1 = new Pessoa(01, "Costa", "04/04/2007");

echo "<pre>";
var_dump($c1);
echo "</pre>";

echo "<pre>";
var_dump($a1);
echo "</pre>";

$c1->setMotorista($a1);

echo "<pre>";
var_dump($c1);
echo "</pre>";