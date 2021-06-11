<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');

echo '<pre>';
// var_dump($mysqli);

// https://stackoverflow.com/questions/64894/select-data-from-show-tables-mysql-query
// $sql = 'SELECT * FROM INFORMATION_SCHEMA.TABLES';
$sql = 'SELECT * FROM foods';


$res = mysqli_query($mysqli, $sql);

// var_dump($res);

$res_interpretado = mysqli_fetch_all($res, MYSQLI_ASSOC);
// $res_interpretado = mysqli_fetch_all($res, MYSQLI_BOTH);
// $res_interpretado = mysqli_fetch_all($res, MYSQLI_NUM);

// var_dump($res_interpretado); exit("Fechando o código para TESTE");

$tableHtml = "<table style=\"width:100%\">";

foreach ($res_interpretado as $indice => $registro) {
  // Entra na primeira linha e coloca o registro na var $registro
  foreach ($registro as $nomeColuna => $value) {
    $tableHtml .= '<th>';
    $tableHtml .= $nomeColuna;
    $tableHtml .= '</th>';
  }
  break; // não deixa ir para a segunda linha
}


foreach ($res_interpretado as $indice => $linha) {
  // AQUI A LINHA TODA É LIDA, e está armazenada em $linha
  $tableHtml .= "<tr>";
  foreach ($linha as $labelColuna => $dadoColuna) {
    // Aqui a gente faz as colunas
    $tableHtml .= "<td>";
    $tableHtml .= $dadoColuna;
    $tableHtml .= "</td>";
  }

  $tableHtml .= "<td>";
  $tableHtml .= "<a href='20210514delete.php?ac=". $linha['ITEM_ID'] . "'> DELETE </a>";
  $tableHtml .= "</td>";

  $tableHtml .= "<td>";
  $tableHtml .= "<a href='20210611updateform.php?ITEM_ID=". $linha['ITEM_ID'] . "'> UPDATE </a>";
  $tableHtml .= "</td>";

  $tableHtml .= "</tr>";
  // echo '<br>';
}
// $tableHtml = $tableHtml . "</table>"; // Essa linha é igual a debaixo, mas economiza
$tableHtml .=  "</table>";

echo $tableHtml;




 ?>
