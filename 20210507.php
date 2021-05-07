<?php

// https://www.php.net/manual/pt_BR/mysqli.construct.php

var_dump($_GET);



$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');

echo '<pre>';
// var_dump($mysqli);

// https://stackoverflow.com/questions/64894/select-data-from-show-tables-mysql-query
// $sql = 'SELECT * FROM INFORMATION_SCHEMA.TABLES';
$sql = 'SELECT * FROM orders';


$res = mysqli_query($mysqli, $sql);

// var_dump($res);

$res_interpretado = mysqli_fetch_all($res, MYSQLI_ASSOC);
// $res_interpretado = mysqli_fetch_all($res, MYSQLI_BOTH);
// $res_interpretado = mysqli_fetch_all($res, MYSQLI_NUM);

var_dump($res_interpretado); exit;


foreach ($res_interpretado as $key => $value) {
  // var_dump($value);
  echo $value["COMPANY_ID"] ." ". $value["COMPANY_NAME"] ." ". $value["COMPANY_CITY"];
  // echo '<br>';
}

 ?>
