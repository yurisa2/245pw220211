<?php
echo '<pre>';

echo '############################<br>';
echo '###### Arrays Associativos ####<br>';
echo '############################<br>';

// https://www.php.net/manual/en/function.array.php
//https://www.php.net/manual/pt_BR/language.types.array.php

echo '<br>';

$array1 = array();
var_dump($array1);

$array1['NOME'] = "Nome Do Aluno";
$array1['TEL'] = 1111111111111111;
$array1['ALTURA'] = 1.68;
$array1['END'] = "Endereço do Aluninho";
$array1['CEP'] = "11111-111";
$array1['CEPx'] = "11111-111";
var_dump($array1);

// Removendo uma posicao do ARRAY
// https://www.php.net/manual/pt_BR/function.unset.php

unset($array1['CEPx']);
var_dump($array1);

$array1 = NULL;
var_dump($array1);

unset($array1); // ELIMINA COMPLETAMENTE O ARRAY
var_dump($array1);


// pode-se substituir a função array() por []
$array2 = array(
          'NOME' => 'Nome do aluno',
          'TEL' => 111111111154545,
          'ALTURA' => 1.68,
);

var_dump($array2);


// https://www.php.net/manual/pt_BR/control-structures.foreach.php
foreach ($array2 as $chave => $valor) {
          echo "Esta é a chave do array: " . $chave . " Isto aqui é o valor: " . $valor;
          echo "<br>";
}

foreach ($array2 as $key => $value) {
          $array2[$key] = $value . "-CANCELADO";
}

var_dump($array2);


foreach ($array2 as $key => $value) {
          if($key == "NOME") $array2['NOME'] = "CENSURADO";
}
var_dump($array2);

echo '<br>';
echo '<br>';
echo '<br>';

echo '############################<br>';
echo '###### Arrays Indexados ####<br>';
echo '############################<br>';

echo '<br>';
echo '<br>';
echo '<br>';

$array1 = array();
var_dump($array1);

$array1[0] = "Nome Do Aluno";
$array1[1] = 1111111111111111;
$array1[2] = 1.68;
$array1[3] = "Endereço do Aluninho";
$array1[4] = "11111-111";
$array1[5] = "11111-111";
var_dump($array1);


$array1[] = rand();
var_dump($array1);


$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
$array1[] = rand();
var_dump($array1);

$numeros = [];
var_dump($numeros);

for ($i=0; $i < 10; $i++) {
          $numeros[] = rand();
}
var_dump($numeros);

$linha2 = array(
          'NOME' => 'YURI',
          'TEL' => 111111111,
          'ALTURA' => 1.76,
);
var_dump($linha2);

$linha3 = array(
          'NOME' => 'FELLIPE',
          'TEL' => 222222222,
          'ALTURA' => 1.98,
);
var_dump($linha3);

$matriz = [] ;

$matriz[2] = $linha2;
$matriz[3] = $linha3;

var_dump($matriz);

// PEGAR O TELEFONE DO YURI

var_dump($matriz[2]['TEL']);

// PEGAR SOH O TELEFONE DA GERAL

foreach ($matriz as $key => $value) {
          var_dump($value["TEL"]);
}


$table = "<table style='border: 1px solid black;'>";
foreach ($matriz as $num_linha => $linha) {
          $table .= "<tr style='border: 1px solid black;'>";
          foreach ($linha as $chave => $valor) {
                    $table .= "<td style='border: 1px solid black;'>";
                    $table .= $valor;
                    $table .= "</td>";
          }
          $table .= "</tr>";
}
$table = $table . "</table>";

echo $table;

echo '<br>';

$contas = [];

for ($i=0; $i < 10; $i++) {
          $contas[$i]["QUADRADO"] = $i ** 2;
          $contas[$i]["CUBO"] = $i ** 3;
          $contas[$i]["RAIZ"] = sqrt($i);
}

var_dump($contas);


$contasHtml = "<table style='border: 1px solid black;'>";


$contasHtml .= "<thead>
<tr>";
foreach ($contas[0] as $key => $value) {
          $contasHtml .= "<th>";
          $contasHtml .= $key;
          $contasHtml .= "</th>";
}


$contasHtml .= "   </tr>
</thead>";

foreach ($contas as $numLinha => $linha) {
          $contasHtml .= "<tr style='border: 1px solid black;'>";

          foreach ($linha as $chave => $valor) {
                    $contasHtml .= "<td style='border: 1px solid black;'>";
                    $contasHtml .= $valor;
                    $contasHtml .= "</td>";
          }
          $contasHtml .= "</tr>";
}

$contasHtml .= "</table>";

echo $contasHtml;


?>
