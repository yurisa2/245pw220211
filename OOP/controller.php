<?php

// Fazer um sistema de bhaskara como o já feito 300x, porém orientado a objetos

include 'model.php';
include 'view.php';


$bancoIns = new BancoBhaskara;

$interfaceVisual = new InterfaceVisual;

$requisicao = $_GET;
if (!empty($requisicao) && isset($requisicao['a'])) {
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];

  $delta = pow($b, 2) - 4 * $a * $c;
  $x1 = (- $b + sqrt($delta)) / 2 * $a;
  $x2 = (- $b - sqrt($delta)) / 2 * $a;

  $bancoIns->insert($a, $b, $c, $delta, $x1, $x2);
}

if($requisicao['pagina']=="tabela")
{
  $dados = $bancoIns->select();
  echo($interfaceVisual->showTable($dados));
}

if($requisicao['pagina']=="insert")
{
  // var_dump($dados);
  echo($interfaceVisual->formInsert());
}

?>
