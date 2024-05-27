<?php
session_start();
include_once("conexao.php");
// print_r($_SESSION);
if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senhaa']) == true))
{
    unset($_SESSION['usuario']);
    unset($_SESSION['senhaa']);
    header("location: login.php");
}
    $logado = $_SESSION['usuario'];
    $sql = "SELECT * FROM contas ORDER BY codigo ASC";
    $resultado = $conexao->query($sql);
?>


<?php
class InformacoesCampeoes {
    public function exibirPagina($logado) {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Informações de Campeões</title>
            <link rel="stylesheet" href="dados.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </head>
        <body class="corpo">
            <header class="cabecalho">
                <h1>Informações de Campeões</h1>
                <div>
                    <?php echo("<button class='botao_cliente'>Olá $logado</button>"); ?>
                    <a class="a" href="sair2.php"><button class="kit">Sair</button></a>
                </div>
            </header>
            <main>
                <form class="formulario" id="championForm">
                    <label class="label" for="championId">Nome do Campeão</label>
                    <input class="importa" type="text" id="championId" name="championId" required>
                    <button class="botao" type="submit">Consultar</button>
                </form>
                <hr>
                <div class="divinha" id="result"></div>
                <script>
                    $(document).ready(function() {
                        $("#championForm").submit(function(e) {
                            e.preventDefault();
                            var apiKey = "RGAPI-7db08026-bc58-4b61-98a8-d4a34382be2b";
                            var championId = $("#championId").val();

                            var apiUrl = "https://ddragon.leagueoflegends.com/cdn/11.21.1/data/en_US/champion/" + championId + ".json";

                            $.ajax({
                                url: apiUrl,
                                success: function(data) {
                                    var championData = data.data[championId];
                                    var championName = championData.name;
                                    var championTitle = championData.title;
                                    var championImage = championData.image.full;

                                    var resultHtml = "<h1>Informações do Campeão " + championName + "</h1>";
                                    resultHtml += "<h2>Nome: " + championName + "</h2>";
                                    resultHtml += "<h2>Título: " + championTitle + "</h2>";
                                    resultHtml += "<img src='https://ddragon.leagueoflegends.com/cdn/11.21.1/img/champion/" + championImage + "' alt='Imagem do Campeão'>";

                                    $("#result").html(resultHtml);
                                },
                                error: function() {
                                    $("#result").text("Ocorreu um erro na requisição.");
                                }
                            });
                        });
                    });
                </script>
            </main>
            <script type="text/javascript" src="inicial2.js"></script>
        </body>
        </html>
        <?php
    }
}


$informacoesCampeoes = new InformacoesCampeoes();
$informacoesCampeoes->exibirPagina("$logado");
?>
