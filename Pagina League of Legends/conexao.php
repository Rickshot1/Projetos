<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "campeonato";
$nome_tabela = "contas";

$conexao = new mysqli($servidor,$usuario,$senha,$nome_banco);
// if ($conexao->connect_errno)
// {
//     echo"erro";
// }
// else
// {
//     echo"vai peste";
// }

?>