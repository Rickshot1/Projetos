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
                            <input required class = "importar" type = "text" name="nome" value = "">
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
                        <input type= "submit"  onclick = "botaomenu()" name="submit" value= "Cadastrar" class = "botao_cadastrar" id = "sub">
                    </fieldset>
                </form>
                <script>
                        function botasub(){
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
                </script>
                <br>
                <button class = "botao_voltar" onclick = "voltinha()">voltar</button>
                <script>
                    function voltinha(){
                        window.history.back()
                    }
                </script>
            </div>
        </main>
    </body>
</html>