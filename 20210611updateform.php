<?php

$item_id = $_GET["ITEM_ID"];

echo '<pre>';
$sql = 'SELECT * FROM foods where ITEM_ID = ' . $item_id;

$mysqli = mysqli_connect('localhost', 'root', '', 'pw2');

$res = mysqli_query($mysqli, $sql);

// var_dump($res);

$res_interpretado = mysqli_fetch_all($res, MYSQLI_ASSOC);

$registro = $res_interpretado[0];

// var_dump($registro);
// exit;

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inserir dados na tabela</title>
  </head>
  <body>

    <h1>Update Tabela foods</h1>
    <form class="" action="20210611update.php" method="post">
      <!-- https://www.w3schools.com/tags/att_input_type_hidden.asp -->
      <input type="hidden" name="ITEM_ID" value="<?php echo $registro['ITEM_ID']; ?>">

      <label for="ITEM_NAME">ITEM_NAME</label>
      <input type="text" name="ITEM_NAME" value="<?php echo $registro['ITEM_NAME']; ?>">

      <label for="ITEM_UNIT">ITEM_UNIT</label>
      <input type="text" name="ITEM_UNIT" value="<?php echo $registro['ITEM_UNIT']; ?>">

      <label for="COMPANY_ID">COMPANY_ID</label>
      <input type="text" name="COMPANY_ID" value="<?php echo $registro['COMPANY_ID']; ?>">

      <input type="submit" name="" value="ATUALIZAR">

    </form>
  </body>
</html>
