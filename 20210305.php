<?php
echo '<pre>';

echo '############################<br>';
echo '###### Funções Definidas pelo Usuário ####<br>';
echo '############################<br>';

// https://www.php.net/manual/pt_BR/language.functions.php

$valor_pi = pi();

var_dump("Variavel-" . $valor_pi);

var_dump("Funcao-" . pi());

var_dump(sqrt(pi()));

// Existem funções que
// 1 - Retornam valor
// 1b - Executam alguam coisa mas não retorna nada
// 2 - Aceitam parametros
// 2b - Não aceitam parametros
// 3 - Nem tem parametros, nem retorna nada

function raiz_de_pi() {
  $valor_de_pi = pi();
  $raiz_de_pi = sqrt($valor_de_pi);

  return $raiz_de_pi;
}

echo "<br> A raiz de pi é " . raiz_de_pi();

echo "<br><br><br>";

function eh_primo_procedimento($n) {

  $divisores = 0;

  for($count=2; $count<$n; $count++) {
    if($n % $count == 0){
      echo "Multiplo de $count<br />";
      $divisores++;
      break;
    }
  }
  if($divisores)  echo "Não é";
  else    echo "É primo!";
}

eh_primo_procedimento(41);

echo "<br><br><br>";

function eh_primo_retorno($n) {
  // global $divisores;  // Caso queiramos que ela seja utilizada fora do ESCOPO LOCAL

  $retorno = NULL;
  $divisores = 0;

  for($count=2; $count<$n; $count++) {
    if($n % $count == 0){
      // echo "Multiplo de $count<br />";
      $divisores++;
      break;
    }
  }
  if($divisores)  $retorno = FALSE;
  else    $retorno = TRUE;

  return $retorno;
}

var_dump(eh_primo_retorno(40));

var_dump($divisores);



echo "<br><br><br>";
//https://www.php.net/manual/pt_BR/function.rand
var_dump(rand());
var_dump(rand(10,20));

// var_dump(eh_primo_retorno()); // Exemplo quando a função ESPERA um parametro

$aleatorio = rand();

function eh_primo($numero = NULL) {

  if($numero == NULL) echo "Insira um número válido";
  else echo "O numero é: " . eh_primo_retorno($numero);

}

eh_primo(2);

?>
