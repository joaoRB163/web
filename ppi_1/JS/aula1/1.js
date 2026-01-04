i = 0;
function bla() {
    i++;
    console.log("Botão com arquivo JS importado - " + i);

}

b = document.querySelector("button:nth-child(4)");

b.innerHTML="Clique em mim";

b.addEventListener("click", bla);