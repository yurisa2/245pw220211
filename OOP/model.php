<?php

// Fazer um sistema de bhaskara como o já feito 300x, porém orientado a objetos

/**
 *
 */
class BancoBhaskara
{

  function __construct()
  {
    $this->conn = mysqli_connect('localhost', 'root', '', 'bhaskara');
  }

  function delete($id)
  {
    $query = "DELETE FROM calculos WHERE ID = " . $id;

    $this-> run_sql($query);
  }


  function run_sql($sqlStr)
  {
    $resultado = mysqli_query($this->conn, $sqlStr);

    return $resultado;
  }

  function insert($a, $b, $c, $delta, $x1, $x2)
  {

    $query = "INSERT INTO `calculos` (`a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES (";
    $query .= "'";
    $query .= $a;
    $query .= "', '";
    $query .= $b;
    $query .= "', '";
    $query .= $c;
    $query .= "', '";
    $query .= $delta;
    $query .= "', '";
    $query .= $x1;
    $query .= "', '";
    $query .= $x2;
    $query .= "'";
    $query .= ")";

    $this-> run_sql($query);
  }

function select()
{
  $query = "SELECT * FROM calculos";

  return $this->run_sql($query);
}


function interpret_result($mysqli_result)
{
  $resultado_interpretado = mysqli_fetch_all(mysqli_query($mysqli_result, MYSQLI_ASSOC));

  return $resultado_interpretado;
}


}



 ?>
