<?php


$agentCode = $_GET['ac'];

$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');

echo '<pre>';
// var_dump($mysqli);

// DELETE FROM `agents` WHERE `agents`.`AGENT_CODE` = \'A007 \'"?


// https://stackoverflow.com/questions/64894/select-data-from-show-tables-mysql-query
// $sql = 'SELECT * FROM INFORMATION_SCHEMA.TABLES';
$sql = 'DELETE FROM agents where AGENT_CODE = ' . "'". $agentCode . "'";

// var_dump($sql);

$res = mysqli_query($mysqli, $sql);


header("Location: 20210514.php");

 ?>
