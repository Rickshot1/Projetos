<?php
    if(!empty($_GET["codigo"]))
    {
        include_once('conectar.php');
        $codigoo = $_GET["codigo"];
        $sqlselelct1 = "SELECT * FROM cliente WHERE codigo =$codigoo";
        $resultado1 = $conexao->query($sqlselelct1);
        if($resultado1->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($resultado1))
            {
                $nome = $user_data['nome'];
                $idade = $user_data['idade'];
                $sobrenome = $user_data['sobrenome'];
                $cpf = $user_data['cpf'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $genero = $user_data['genero'];
                $datanascimento = $user_data['data_nascimento'];
                $estado = $user_data['estado'];
                $cidade = $user_data['cidade']; 
                $usuario = $user_data['usuario'];
                $senhaa = $user_data['senhaa']; 
            }
        }
        else
        {
            header("location: teste.php");
        } 

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "cadastro1.css">
        <title>sitezao</title>
    </head>
    <body class = "corpinho">
        <header class = "cabeca">
            <h1>Cadastro</h1>
        </header>
        <br>
        <br>
        <main>
            <div class = "tabela">
                <form action = "paginazinha.php" method="POST" onsubmit = "botasub()" name = "fun">
                    <fieldset class = "forma">
                        <legend class = "legenda2">Dados</legend>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "text" name="nome" value = "<?php echo $nome ?>">
                            <label class = "label1">Nome</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "text" name = "sobrenome">
                            <label class = "label8">Sobrenome</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa"> 
                            <input required class = "importar" type="number" name="idade" min = "0" value = "">
                            <label class = "label7">Idade</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required name = "cpf" type = "number" class = "importar" name= "cpf" maxlength = "9" size = "9">
                            <label class = "label2">CPF</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "text" name="email">
                            <label class = "label3">E-Mail<label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "tel" name="telefone">
                            <label class = "label4">Telefone</label>
                        </div>
                        <br>
                        <br>
                        <p class = "pezim">Gênero:</p>
                        <input type = "radio" id = "feminino" name = "genero" value ="Feminino" required>
                        <label for = "feminino" class = "feminino">Feminino</label>
                        <br>
                        <input type = "radio" id = "masculino" name = "genero" value = "masculino" required>
                        <label for = "masculino" class = "masculino">Masculino</label>
                        <br>
                        <input type = "radio" id = "outros" name = "genero" value = "outros" required>
                        <label for = "outros" class = "outros">Outros</label>
                        <br>
                        <br>
                        <!-- anexar arquivo do pc e enviar (ex: trabalhos de escola) -->
                        <!-- <input type = "file" id = "status" name = "status" value = "status" required>
                        <label for = "status"> casado </label> -->
                        <!-- caixinha -->
                        <!-- <input type = "checkbox" id = "status" name = "status" value = "status" required> -->
                        <!-- <input type = "checkbox" id = "status" name = "status" value = "status" required>
                        <label for = "status"> casado </label> -->
                        <div class = "importar_caixa">
                            <label class = "data">Data de Nascimento:</label>
                            <input class = "datinha" type = "date" name = "data_nascimento">
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = text name = "estado">
                            <label class = "label5">Estado</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "text" name = "cidade">
                            <label class = "label6">Cidade</label>
                        </div>
                        <br>
                        <br>
                        <div class = importar_caixa>
                            <input required class = "importar" type = "text" name = "usuario">
                            <label class = "label9">Crie seu Usuário</label>
                        </div>
                        <br>
                        <br>
                        <div class = "importar_caixa">
                            <input required class = "importar" type = "text" name = "senhaa" maxlength = "8" size = "8">
                            <label class = "label10">Crie sua Senha</label>
                        </div>
                        <br>
                        <br>
                        <input type= "submit"  onclick = "botaomenu()" name="submit" value= "Confirmar" class = "botao_cadastrar" id = "sub">
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
</html>