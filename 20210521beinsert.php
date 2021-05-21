<?php
// var_dump($_POST); // DEBUG

$value = $_POST;

// Modelo de QUERY
// INSERT INTO `foods` (`ITEM_ID`, `ITEM_NAME`, `ITEM_UNIT`, `COMPANY_ID`) VALUES ('max6', 'nameTest', 'UnitTest', 'CIDTest')

$sql = "INSERT INTO `foods` (`ITEM_ID`, `ITEM_NAME`, `ITEM_UNIT`, `COMPANY_ID`) VALUES (";

$sql .= "'";
$sql .= $value['ITEM_ID'];
$sql .= "', '";
$sql .= $value['ITEM_NAME'];
$sql .= "', '";
$sql .= $value['ITEM_UNIT'];
$sql .= "', '";
$sql .= $value['COMPANY_ID'];
$sql .= "'";

$sql .= ")";

// var_dump($sql); exit("Verificando o sql"); // DEBUG

$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');
$res = mysqli_query($mysqli, $sql);

 ?>
