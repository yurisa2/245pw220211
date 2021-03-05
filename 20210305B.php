<?php
echo '<pre>';

echo '############################<br>';
echo '###### Arrays Associativos ####<br>';
echo '############################<br>';

// https://www.php.net/manual/en/function.array.php

$arranjo = array();
var_dump($arranjo);

$arranjo["Nome"] = "Lucicleudes Paiva";
var_dump($arranjo);

$arranjo["RG"] = 123465789;
var_dump($arranjo);

$arranjo["CPF"] = 11111111122;
$arranjo["TEL"] = 987654321;
$arranjo["APOSENTADO"] = TRUE;
$arranjo["ENDERECO"] = "Rua das Carambolas, 1234, Bairro tal";
var_dump($arranjo);

var_dump($arranjo["CPF"]);

$arranjo["CPF"] = 88888888888888;
var_dump($arranjo["CPF"]);

// https://www.php.net/manual/en/control-structures.foreach.php

$cadastro = $arranjo;

// foreach ($cadastro as $chave => $valor) {
//   echo "A chave é: " . $chave . " - O valor é: " . $valor . "<br>";
// }

foreach ($cadastro as $chave => $valor) {
  echo $chave . ": " . $valor . "<br>";
}


foreach ($cadastro as $chave => $valor) {
  if($chave == "CPF") { $cadastro["CPF"] = "CENSURADO"; }
}

var_dump($cadastro);


$var_num = "11";

var_dump($var_num);

var_dump((int)$var_num);

var_dump((bool)$var_num);

$var_num = "0";

var_dump($var_num);

var_dump((int)$var_num);

var_dump((bool)$var_num);

$var_num = NULL;

var_dump($var_num);

var_dump((int)$var_num);

var_dump((bool)$var_num);
?>
