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