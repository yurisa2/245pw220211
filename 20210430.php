<?php

// https://www.php.net/manual/pt_BR/mysqli.construct.php



$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');

echo '<pre>';
// var_dump($mysqli);

// https://stackoverflow.com/questions/64894/select-data-from-show-tables-mysql-query
// $sql = 'SELECT * FROM INFORMATION_SCHEMA.TABLES';
$sql = 'SELECT * FROM company';


$res = mysqli_query($mysqli, $sql);

// var_dump($res);

$res_interpretado = mysqli_fetch_all($res);

// var_dump($res_interpretado);


foreach ($res_interpretado as $key => $value) {
  // var_dump($value);
  echo $value[0] ." ". $value[1] ." ". $value[2];
  // echo '<br>';
}

 ?>
