function bla() {
    console.log("Botão com arquivo JS importado");
}

b = document.querySelector("button:nth-child(4)");

b.innerHTML="Clique em mim";

b.addEventListener("click", bla);