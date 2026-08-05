// Modo oscuro
const btnTema = document.querySelector("#btn-tema");

btnTema.addEventListener("click", () => {
  document.body.classList.toggle("oscuro");

  if (document.body.classList.contains("oscuro")) {
    btnTema.textContent = "☀️ Modo claro";
  } else {
    btnTema.textContent = "🌙 Modo oscuro";
  }
});

// Mostrar u ocultar horarios de atención
const btnHorarios = document.querySelector("#btn-horarios");
const listaHorarios = document.querySelector("#lista-horarios");

btnHorarios.addEventListener("click", () => {
  listaHorarios.classList.toggle("oculto");

  if (listaHorarios.classList.contains("oculto")) {
    btnHorarios.textContent = "Ver horarios";
  } else {
    btnHorarios.textContent = "Ocultar horarios";
  }
});

// Validación del formulario de contacto
const formContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function validarContacto(evento) {
  evento.preventDefault(); // evita que la página se recargue

  const nombre = document.querySelector("#nombre").value.trim();
  const correo = document.querySelector("#email").value.trim();
  const mensaje = document.querySelector("#mensaje").value.trim();

  if (nombre === "") {
    mostrarAviso("Por favor escribe tu nombre.", "error");
  } else if (!correo.includes("@") || !correo.includes(".")) {
    mostrarAviso("Ingresa un correo electrónico válido.", "error");
  } else if (mensaje === "") {
    mostrarAviso("Cuéntanos qué necesitas en el mensaje.", "error");
  } else {
    mostrarAviso("¡Gracias! Tu mensaje fue enviado con éxito.", "exito");
    formContacto.reset();
  }
}

function mostrarAviso(texto, tipo) {
  avisoContacto.textContent = texto;
  avisoContacto.classList.remove("error", "exito");
  avisoContacto.classList.add(tipo);
}

formContacto.addEventListener("submit", validarContacto);