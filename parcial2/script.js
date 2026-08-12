const formHelados = document.querySelector("#form-helados");
const avisoHelados = document.querySelector("#aviso-helados");

function validarPedido(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "" || correo === "") {
    avisoHelados.textContent = "Falta tu nombre o tu correo - sin eso no podemos anotar el pedido.";
    avisoHelados.classList.add("error");
    avisoHelados.classList.remove("exito");
    event.preventDefault();

  } else if (!correo.includes("@")) {
    avisoHelados.textContent = "Ese correo no tiene arroba - revísalo por favor.";
    avisoHelados.classList.add("error");
    avisoHelados.classList.remove("exito");
    event.preventDefault();

  } else {
    avisoHelados.textContent = "Pedido anotado - te atiende Ruben Chocamani Flores";
    avisoHelados.classList.add("exito");
    avisoHelados.classList.remove("error");
  }
}

formHelados.addEventListener("submit", validarPedido);
