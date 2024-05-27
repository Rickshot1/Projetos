<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paga</title>
    <link rel = "stylesheet" href = "cadastrase3.css">
</head>
<body class = "corpo2">
    <header class = "cabeca2">
        <h1></h1>
    </header>
    <main class = "mono">
        <div class = "div_login">
            <h1 class = "h">Login</h1>
            <!-- <input class = "id_login" type = "text" placeholder="usuario" name = "usuario">
            <br>
            <br>
            <input class = "senha_login" type = "text" placeholder = "senha" name = "senha"> -->
            <!-- <br>
            <br>
            <button class = "botao_confirmar">Confirmar</button>
            <br>
            <br> -->
            <br>
            <br>
            <form action = "login.php" method = "POST">
            <input class = "id_login" type = "text" placeholder="Usuário" name = "login">
            <br>
            <br>
            <input class = "senha_login" type = "password" placeholder = "Senha" name = "senha">
            <br>
            <br>
            <input  name = "confir" type ="submit" class = "botao_confirmar" name=sub  value = "Confirmar">
            </form>
            <br>
            <br>
            <form action = "pagina_cadastro.php" method = "POST">
            <input name = "senhaa" type ="submit" class= "botao_cadastrase" name=submit value = "Cadastre-se aqui!">
            </form>
            <br>
            <br>
            <button class = "volta" onclick = "voltar_2()">Voltar</button>
            <script>
                    function voltar_2(){
                        window.history.back()
                    }
            </script>
        </div>
        <?php
            if(isset($_POST['submit']))
            {
                // PRINTAR A DISGRAÇA DO NOME DANDO ERRADO
                // print_r($_POST['nome']);
                // print_r($_POST['idade']);}
                include_once('conectar.php');

                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $sobrenome = $_POST['sobrenome'];
                $cpf = $_POST['cpf'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $genero = $_POST['genero'];
                $datanascimento = $_POST['data_nascimento'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade']; 
                $usuario = $_POST['usuario'];
                $senhaa = $_POST['senhaa'];
                $result = mysqli_query($conexao, "INSERT INTO cliente(nome, idade, sobrenome, cpf, email, telefone, genero, estado, cidade, usuario, senhaa, data_nascimento)
                 VALUES ('$nome', '$idade', '$sobrenome', '$cpf', '$email', '$telefone', '$genero', '$estado', '$cidade', '$usuario', '$senhaa', '$datanascimento')");
            }
               
            // if(isset($_POST['sub']))
            // include_once('conectar.php');
            // $login = $_POST['usuario'];
            // $entrar = $_POST['sub'];
            // $senha = md5($_POST['senhaa']);
            // $connecta = mysql_connect('samuka_gostoso', 'usuario', 'senhaa');
            // $db = mysql_select_db('samuka_gostoso');
            // if(isset($entrar)) {
            // $verificar = mysql_query($conexao,"SELECT * FROM cliente WHERE login = '$usuario' and senha = '$senhaa'") or die ("erro ai arrombado!");
            //     if (mysql_num_rows($verificar)<=0){
            //         echo"<script language = 'javascript' type = 'text/javascript'> alert('login ou senha errada burro');window.location.href='paginazina.php';<script>";
            //             die();
            //         }else{ -->
            //             setcookie("login",$usuario);
            //             header("location:login.php");
            //         }
        ?> 
    </main>
</body>
</html>