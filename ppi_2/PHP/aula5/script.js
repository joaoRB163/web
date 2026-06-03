function criarCookie(nome, valor, dias) {
  const data = new Date();

  data.setTime(
    data.getTime() + dias * 24 * 60 * 60 * 1000
  );

  const expires = "expires=" + data.toUTCString();

  document.cookie =
    nome + "=" + encodeURIComponent(valor) + ";" +
    expires + ";path=/;SameSite=Lax";
}

function lerCookie(nome) {
  const nomeProcurado = nome + "=";
  const cookies = document.cookie.split(";");

  for (let cookie of cookies) {
    cookie = cookie.trim();

    if (cookie.indexOf(nomeProcurado) === 0) {
      return decodeURIComponent(
        cookie.substring(nomeProcurado.length)
      );
    }
  }

  return null;
}

function apagarCookie(nome) {
  document.cookie =
    nome + "=;" +
    "expires=Thu, 01 Jan 1970 00:00:00 UTC;" +
    "path=/;SameSite=Lax";
}

function apagarCookieTema() {
  apagarCookie("tema");
  aplicarTema("claro");
}

function definirTema(tema) {
  criarCookie("tema", tema, 30);
  aplicarTema(tema);
}

function aplicarTema(tema) {
  if (tema === "escuro") {
    document.body.classList.add("escuro");
  } else {
    document.body.classList.remove("escuro");
  }
}

const temaSalvo = lerCookie("tema");

if (temaSalvo) {
  aplicarTema(temaSalvo);
}