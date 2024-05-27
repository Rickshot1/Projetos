 
 <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "cadastro.css">
        <title>Campeonato</title>
    </head>
    <body class = "fundo">
        <header class = "cabecalho">
            <h1>Cadastro<h1>
        </header>
        <br>
        <br>
        <main>
            <div class = "tabela">
                <form class = "formulario" method = "POST" onsubmit = "onsub()" name = "fun">
                    <fieldset class = "forma">
                        <legend class = "legenda">Cadastro</legend>
                        <br>
                        <div class = "div_importar">
                            <input required class = "importar" type = "text" name = "nome" value = "">
                            <label class = "label1">Nome</label>
                        </div>
                        <br>
                        <div class = "div_importar">
                            <input required class = "importar" name = "sobrenome">
                            <label class = "label2">Sobrenome</label>
                        </div>
                        <br>
                        <div class = "div_importar">
                            <input required class = "importar" name = "nick">
                            <label class = "label3">Nick</label>
                        </div>
                        <br>
                        <div class = "div_importar">
                            <label class = "data">Data de Nascimento</label>
                            <input type = "date" name = "data_nascimento">
                        </div>
                        <br>
                        <div>
                            <p class = "genero">Gênero</p>
                            <input type = "radio" name = "genero" id = "Feminino" value = "Feminino" required>
                            <label class = "feminino">Feminino</label>
                            <input type = "radio" name = "genero" id = "Masculino" value = "Masculino" required>
                            <label class = "masculino">Masculino</label>
                            <input type = "radio" name = "genero" id = "Outros" value = "Outros" required>
                            <label class = "outros">Outros<label>
                        </div>
                        <br>
                        <div class = "div_importar">
                            <input name = "cria_login" class = "importar" required>
                            <label class = "label4">Crie seu Login</label>
                        </div>
                        <br>
                        <div class = "div_importar">
                            <input name = "cria_senha" class = "importar" required>
                            <label class = "label5">Crie sua Senha</label> 
                        </div>
                        <br>
                        <input class = "confirmar" type = "submit" onclick = "botaomenu()" value = "Confirmar" name = "submite" id = "sub">
                        <br>
                    </fieldeset>
                </form>
                <br>
                <script>
                    function onsub(){
                            var nomePessoa = document.forms["fun"]["nome"].value;
                            if (nomePessoa == "") {
                                alert("Favor informar o seu nome!");
                                return false;     
                            }
                            else{
                                alert("Olá, " + nomePessoa + " ! Seu cadastro foi realizado com sucesso!");
                                return true;
                            }
                        }
                    // function botaomenu(){
                    //     window.location.href = "login.php"
                    // }
                </script>
            </div>
            <?php
            if(isset($_POST['submite']))
            {
                include_once('conexao.php');

                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $nick = $_POST['nick'];
                $data_nascimento = $_POST['data_nascimento'];
                $genero = $_POST['genero'];
                $cria_login = $_POST['cria_login'];
                $cria_senha = $_POST['cria_senha'];
                $result = mysqli_query($conexao, "INSERT INTO contas(nome, sobrenome, nick, data_nascimento, genero, login, senha)
                VALUES ('$nome', '$sobrenome', '$nick', '$data_nascimento', '$genero', '$cria_login', '$cria_senha')");
            }
            ?>
            <a class = "azinho" href = "gansondask.php"><button class = "voltar" onclick = "voltar()">Voltar</button></a>
        </main>
    </body>
</html>