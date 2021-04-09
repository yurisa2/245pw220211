<?php
echo '<pre>';


// Notação mental

// $a = 5; #hipotenusa
// $b = 4; # CatOp
// $c = 3; # CatAd


// $teste = [
//           'Seno' => $valorSeno,
//           'Cosseno' => $valorCos,
//           'Tangente' => $valorTangente
// ];

function seno($catOp, $hip) {
          $seno = $catOp / $hip;

          return $seno;
}

function cosseno($catAd, $hip) {
          $cosseno = $catAd / $hip;

          return $cosseno;
}

function tangente($catOp, $catAd) {
          $tangente = $catOp / $catAd;

          return $tangente;
}

$testeLinha = array(
          'a' => $a,
          'b' => $b,
          'c' => $c,
          'seno' => seno($b, $a),
          'cosseno' => cosseno($c, $a),
          'tangente' => tangente($b, $c)
);
var_dump($testeLinha); // ISSO É SÓ UM TESTE

// Agora precisamos fazer a aquisição dos dados



$matriz = array();

for ($i=0; $i < 10; $i++) {
          $entrada = array();

          $entrada['a'] = rand(1,10);
          $entrada['b'] = rand(1,10);
          $entrada['c'] = rand(1,10);


          $saida = array(
                    'seno' => seno($entrada['b'], $entrada['a']),
                    'cosseno' => cosseno($entrada['c'], $entrada['a']),
                    'tangente' => tangente($entrada['b'], $entrada['c'])
          );


          // https://www.php.net/manual/pt_BR/function.array-merge.php
          $result = array_merge($entrada, $saida);

          // var_dump($result);
          $matriz[] = $result;
}

var_dump($matriz);



 ?>
