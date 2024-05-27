<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "testinho.css">
    <title>Campeonato</title>
</head>
<body class = "fundo">
    <header class = "cabecalho">
        <h1>Consulta</h1>
        <div class = "cadastrese">
            <a class = "caminho1" href = "cadastro.php"><button class = "botao_cadastro">Cadastre-se</button></a>
        </div>
    </header>
    <main class = "main">
        <div>
            <img class = "fundinho" src = "botao1.jpg">
        </div>
        <div class = "corpo">
            <div class = "fotos"> 
                <div class = "fotinha"> 
                    <input type = "radio" name = "foto" id = "foto1" checked>
                    <input type = "radio" name = "foto" id = "foto2">
                    <input type = "radio" name = "foto" id = "foto3">
                    <div class = "foto ft1"> 
                        <img src = "123.jpg" alt = "">
                    </div>
                    <div class = "foto">
                        <img src = "imagem1.webp" alt = "">
                    </div>
                    <div class = "foto">
                        <img src = "imagem3.webp" alt = "">
                    </div>
                </div>
                <div class = "labels">
                    <label class = "barra" for = "foto1"></label>
                    <label class = "barra" for = "foto2"></label>
                    <label class = "barra" for = "foto3"></label>
                </div>
            </div>  
        </div>
        <div class = "quadrante">
            <div class = "caixa">
                <div class = "cria_imagem">
                    <img src = "pequena.jpg">
                    <h2>Login</h2>
                    <a href = "login.php">Clique aqui</a>
                </div>
            </div>   
        </div>
        <div class = "imagem_zeri" id = "imagem_zeri" data-anima = "descer">
            <img class = "zeri_2"  src = "zeri.png">
        </div>
        <div class = "imagem_gnar" data-anima = "descer">
            <img class = "gnar_2" src = "gnar1.png">
        </div>
        <div class = "imagem_kindred" data-anima = "descer">
            <img class = "kindred" src = "kindred.png">
        </div>
        <div class = "texto" data-anima = "up">
            <h1>Para todos os competidores de todos os elos.</h1>
        </div>
        <div class = "texto_2" data-anima = "up">
            <h1>Diversao garantida</h1>
        </div>
        <div class = "texto_3" data-anima = "up">
            <h1>Competitividade</h1>
        </div>
        <div data-anima="direita">
            <img class = "thresh" src = "thresh1.png">
        </div>
        <div class = "texto_final" data-anima = "direita">
            <h1>Um evento para todos que queiram ter a experiência de ter um formato competitivo em League of Legends, podendo ter vários tipos de benéficios.
            </h1>
        </div>
    </main>
    <script type="text/javascript" src = "inicial.js"></script> 
</body>
</html>