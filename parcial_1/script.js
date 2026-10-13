const boton = document.querySelector("#btn-ejemplo");
function mostrarMensaje() {
    const mensaje = document.querySelector("#mensaje-ejemplo");
    mensaje.textContent = "Solicitud recibida";
    mensaje.classList.remove("oculto");
}
boton.addEventListener("click", mostrarMensaje);