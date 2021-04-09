<?php

echo "<pre>";

// Diferenças entre echo() e var_dump()

// https://www.php.net/manual/pt_BR/function.echo.php
// https://www.php.net/manual/pt_BR/function.var-dump.php


// Como "escovar" um array

$escovado = array();
$escovado["a"] = 1;
$escovado["b"] = 2;
$escovado["c"] = 7;
$escovado["delta"] = 4;
$escovado["x1"] = -148;
$escovado["x1"] = -148;
$escovado["x2"] = 420;

var_dump($escovado);

// echo $escovado; // Isso está erradinho

echo "<br>";

echo $escovado["delta"];

echo "<br>";

// https://www.php.net/manual/pt_BR/control-structures.foreach.php
foreach($escovado as $chave => $valor) {

  echo "O valor de ". $chave . " é " . $valor . "<br>";

}




?>
