var btn = document.querySelector(".botao_cliente");
var caixa = document.querySelector(".kit");

btn.addEventListener("click",function(){
    if(caixa.style.display === "block"){
        caixa.style.display = "none";
    } else{
        caixa.style.display = "block";
    }
});
