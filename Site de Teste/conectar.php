<?php
//nesta include, adicionamos uma única linha de código que é responsável por estabelecer a ligação propriamente dita entre o PHP e o MySQL
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "samuka_gostoso";
$nome_tabela = "cliente";

$conexao = new mysqli($servidor,$usuario,$senha,$nome_banco);

// if ($conexao->connect_errno)
// {
//     echo"erro";
// }
// else
// {
//     echo"vai peste";
// }

