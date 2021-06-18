<?php

// Fazer um sistema de bhaskara como o já feito 300x, porém orientado a objetos


class InterfaceVisual
{

  function __construct()
  {
    // code...
  }

  function showTable($result)
  {

    $style = "<style>
        a:link, a:visited {
            color: blue;
            text-decoration: none;
        }
        body {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        table {
            border: 1px solid black;
            text-align: center;
        }
        td {
            border: 1px solid black;
        }
        th {
            border: 1px solid black;
        }
        tr {
            border: 1px solid black;
        }
</style>";


    $titulo = "<h1>Mostrando a tabela e deletando (Select/ Delete)</h1>";

    $tabela = "<table>";

    foreach ($result as $indice => $registro) {
        $tabela .= "<tr>";
        foreach ($registro as $nomeColuna => $value) {
            $tabela .= "<th>";
            $tabela .= $nomeColuna;
            $tabela .= "</th>";
        }
        $tabela .= "<th>";
        $tabela .= "DESEJA DELETAR?";
        $tabela .= "</th>";

        $tabela .= "</tr>";
        break;
    }

    foreach($result as $linha) {
        $tabela .= "<tr>";
        foreach($linha as $dado) {
            $tabela .= "<td>";
            $tabela .= $dado;
            $tabela .= "</td>";
        }
        $tabela .= "<td>";
        $tabela .= "<a href='bhaskaracruddelete.php?id=" . $linha['id'] . "'>DELETAR</a>";
        $tabela .= "</td>";

        $tabela .= "</tr>";
    }
    $tabela .= "</table>";

    $buttonVoltar = "<br><a href='bhaskaracrud.html'>VOLTAR</a>";

    return $style . $titulo . $tabela . $buttonVoltar;
  }

  function formInsert()
  {
    $form = '<h1>Inserindo dados (Insert)</h1>
    <div>
        <form action="" method="GET">
            <label for="a">Insira o valor de A</label>
            <input type="text" name="a" value="">
            <label for="b">Insira o valor de B</label>
            <input type="text" name="b" value="">
            <label for="c">Insira o valor de C</label>
            <input type="text" name="c" value="">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
    <br><br><br>
    <div>
    </div> ';

    return $form;
  }

}



 ?>
