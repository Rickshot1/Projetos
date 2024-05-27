<?php
    session_start();
    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']));
    {
        //acessar
        include_once("conectar.php");
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

        // print_r('Usuario: ' . $login);
        // print_r('Senha: ' . $senha);
        $sql = "SELECT * FROM cliente WHERE usuario = '$login' and senhaa = '$senha'";
        
        $result = $conexao->query($sql);

        // print_r($result);
        if(mysqli_num_rows($result)<1)
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header("location: paginazinha.php");
        }
        else
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header("location: teste.php");
        }
    }
    // else         
    // {
    //     header("location: paginazinha.php");
    // }
?>









<!-- 
// $login_cookie = $_COOKIE['usuario'];
// if(isset($login_cookie)){
//     echo"bem vindo, $login_cookie <br>";
//     echo"essas informações <font color = 'red'> klh</font> ser acessadas ";
// }else{
//     echo"bem vindo convidaddo<br>";
//     echo"essas informações <font color = 'red'>  nao klh</font> ser acessadas " ;
//     echo"<br><a href = paginazinha.php>faz ai </a> pra continau";
// }




// include("conectar.php");
// $login = $_POST['usuario'];
// $senha = MD5($_POST['senhaa']);
// $conecta = mysql_connect('')

// if(empty($_POSTA['usuario']) || empty($_POSTA['senhaa'])) {
//     header("location: paginazinha.php");
//     exit();
// }
// $uusuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
// $senhaaa = mysqli_real_escape_string($conexao, $_POST['senhaa']);

// $query = "SELECT codigo, usuario FROM 'cliente' WHERE 'usuario' = '{$uusuario}' and senhaa = '{$senhaaa}'"; 
// echo $query;exit;
// $result = mysqli_query($conexao, $query);

// $row = mysqli_num_rows($result);

// echo $row; -->