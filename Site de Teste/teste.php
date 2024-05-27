<?php
session_start();
include_once("conectar.php");
// print_r($_SESSION);
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location: paginazinha.php");
}
    $logado = $_SESSION['login'];
    $sql = "SELECT * FROM cliente ORDER BY codigo ASC";
    $resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "teste1.css"> 
</head>
<body class = "corpo_dados">
    <header class = "cabecalho">
        <h1>BANCO DE DADOS</h1>
        <div class = "info">
        <?php echo("<button class = 'botao_cliente'>Olá $logado</button>")?>
        <a class ="a" href = "sair.php"><button class = "kit">Sair</button></a>
        </div>
    </header>
    <main>
    <br>
    <br>    
    <h1 class = "hzin">Seja Muito bem vindo ao meu trabalho!</h1>
    </div>
    <br>
    <br>
    <p class = "pezinho">
    Muito Obrigado por fazer seu cadastro em meu banco de dados!
    </p>
    <div class = "div_tabela">
        <table class = "table">
            <thead>
                <tr>
                    <th class = "tero" scope = "col">Código</th>
                    <th class = "tero2" scope = "col">Nome</th>
                    <th class = "tero3" scope = "col">Idade</th>
                    <th class = "tero4" scope = "col">Sobrenome</th>
                    <th class = "tero5" scope = "col">CPF</th>
                    <th class = "tero6" scope = "col">E-mail</th>
                    <th class = "tero7" scope = "col">Telefone</th>
                    <th class = "tero8" scope = "col">Gênero</th>
                    <th class = "tero9" scope = "col">Estado</th>
                    <th class = "tero10" scope = "col">Usuário</th>
                    <th class = "tero11" scope = "col">Senha</th>
                    <th class = "tero12" scope = "col">Cidade</th>
                    <th class = "tero13" scope = "col">Data de Nascimento</th>
                    <th class = "tero14" scope = "col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($receber_dados = mysqli_fetch_assoc($resultado))
                    {
                        echo "<tr>";
                        echo "<td class = 'toro'>".$receber_dados["codigo"]."</td>";
                        echo "<td class = 'toro2'>".$receber_dados["nome"]."</td>";
                        echo "<td class = 'toro3'>".$receber_dados["idade"]."</td>";
                        echo "<td class = 'toro4'>".$receber_dados["sobrenome"]."</td>";
                        echo "<td class = 'toro5'>".$receber_dados["cpf"]."</td>";
                        echo "<td class = 'toro6'>".$receber_dados["email"]."</td>";
                        echo "<td class = 'toro7'>".$receber_dados["telefone"]."</td>";
                        echo "<td class = 'toro8'>".$receber_dados["genero"]."</td>";
                        echo "<td class = 'toro9'>".$receber_dados["estado"]."</td>";
                        echo "<td class = 'toro10'>".$receber_dados["usuario"]."</td>";
                        echo "<td class = 'toro11'>".$receber_dados["senhaa"]."</td>";
                        echo "<td class = 'toro12'>".$receber_dados["cidade"]."</td>";
                        echo "<td class = 'toro13'>".$receber_dados["data_nascimento"]."</td>";
                        echo "<td> <a href = 'editar.php?id=$receber_dados[codigo]'><button>Editar</button></a> </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    <div id = "mensagem" class = "divino">
        <img class = "elefantinho" src = "elefantinho.png">
    </div>
    <div id = "mensagem" class = "divino2">
        <img class = "elefantinho2" src = "elefantinho.png">
    </div> 
    </main>
    <script type="text/javascript" src = "javinha2.js"></script> 
</body>
</html>