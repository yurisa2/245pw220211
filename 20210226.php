<?php
echo '<pre>';

echo '############################<br>';
echo '###### Estruturas de Decisão ####<br>';
echo '############################<br>';

// https://www.php.net/manual/pt_BR/control-structures.if.php

$var1 = 1;
$var2 = 0;

// Operadores Lógicos
// https://www.php.net/manual/pt_BR/language.operators.logical.php
// https://www.php.net/manual/pt_BR/language.operators.precedence.php


if($var1 < $var2) {
  echo "A variável $var1 é MENOR que $var2";

} else if($var1 == $var2 ) {
  echo "A variável $var1 é IGUAL a $var2";

} else {
  echo "A variável $var1 é MAIOR a $var2";

}

echo "<br>";
echo "<br>";
echo "<br>";

//https://www.php.net/manual/en/control-structures.switch.php
switch ($var1) {
  case $var2:
    echo "A variável 1 é $var1 igual variável 2 $var2";
    break;

  case 1:
    echo "A variável $var1 é igual a 1";
    break;

  case 10000:
    echo "$var1 é 10000";
    break;
}

// OPERADORES TERNARIOS -- Busquem Conhecimentos

echo "<br>";
echo "<br>";
echo "<br>";

//https://www.php.net/manual/pt_BR/control-structures.for.php
for ($i=0; $i < 10; $i++) {
  echo "O Valor de i é $i <br>";
}

// Combinação de FOR com IF

// Descobrir se um numero é par ou impar usando MOD (%)
//https://www.php.net/manual/pt_BR/language.operators.arithmetic.php

$resto = 10 % 2;

var_dump($resto);

echo "<br>";
echo "<br>";
echo "<br>";

for ($i=0; $i < 10 ; $i++) {
  if($i % 2 == 0) {
    echo "O numero $i é PAR";
    echo "<br>";
  } else {
    echo "O numero $i é IMPAR";
    echo "<br>";
  }
}

echo "<br>";
echo "<br>";

// https://www.php.net/manual/pt_BR/control-structures.while.php


var_dump($a);

while ($a <= 10) {
  echo "O valor de A é $a";
  echo "<br>";
  $a++;
}

 ?>
