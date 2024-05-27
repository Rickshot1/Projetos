var btn = document.querySelector(".botao_cliente");
var caixa = document.querySelector(".kit");

btn.addEventListener("click",function(){
    if(caixa.style.display === "block"){
        caixa.style.display = "none";
    } else{
        caixa.style.display = "block";
    }
});

// window.sr = ScrollReveal({
//     reset:true
// });
// sr.reveal('.divino', {duration: 4000});

// function aparece(){
//     document.getElementById(".divino").style.visibility = "hidden";
//     }
//     setTimeout(aparece, 3000);