var button = document.getElementById('sub');
    button.setAttribute('type','button')
    button.onclick ="changeColor(blue)" 
    button.appendChild(document.getElementsByClassName('botao_cadastrar'));
    document.body.appendChild(button);

    function mostrar_aviso(){
        alert("Vou aprender essa porra!!!");
    }
    window.onload=function(){
        let botaomenu = document.getElementById("boto");
        botaomenu.onclick = function(){
            mostrar_aviso();
        };
    }

