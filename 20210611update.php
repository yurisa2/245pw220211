<?php
// var_dump($_POST); // DEBUG


$value = $_POST;

echo '<pre>';
// var_dump($value); exit;

// Modelo de QUERY

$sql = "UPDATE foods set
ITEM_NAME =  '". $value['ITEM_NAME'] ."',
ITEM_UNIT =  '". $value['ITEM_UNIT'] ."',
COMPANY_ID =  '". $value['COMPANY_ID'] ."'
where ITEM_ID = '". $value['ITEM_ID'] ."'

";

// var_dump($sql); exit;

// var_dump($sql); exit("Verificando o sql"); // DEBUG

$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');
$res = mysqli_query($mysqli, $sql);

if($res == false) var_dump(mysqli_error($mysqli));

var_dump($res);



 ?>
