function confirmarPedido(){
    let mensaje=document.querySelector("#mensaje");
    mensaje.textContent="Pedido recibido Te atiende Ruben Chocamani Flores";
    mensaje.classList.remove("oculto");
}
let boton=document.querySelector("#btn-confirmar");
boton.addEventListener("click", confirmarPedido);