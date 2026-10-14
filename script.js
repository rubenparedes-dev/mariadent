document.addEventListener("DOMContentLoaded", () => {
    const cuerpo = document.querySelector("body");
    const botonModo = document.querySelector("#btn-tema");
    let esDeDia = true;
    function alternarModo() {
        cuerpo.classList.toggle("oscuro");
        esDeDia = !esDeDia;
        if (esDeDia) {
            botonModo.textContent = "🌙 Modo noche";
        } else {
            botonModo.textContent = "☀️ Modo día";
        }
    }
    botonModo.addEventListener("click", alternarModo);
    const botonMenu = document.querySelector("#btn-menu");
    const menu = document.querySelector("nav ul");
    function alternarMenu() {
        menu.classList.toggle("abierto");
    }
    botonMenu.addEventListener("click", alternarMenu);
    const formulario = document.querySelector("#form-pedido");
    const aviso = document.querySelector("#aviso-form");
    function revisarFormulario(evento) {
        evento.preventDefault();
        const nombre = document.querySelector("#nombre").value;
        const correo = document.querySelector("#correo").value;
        if (nombre === "") {
            aviso.textContent = "Falta tu nombre.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        } else if (correo.includes("@") === false) {
            aviso.textContent = "Ese correo no parece un correo.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        } else {
            aviso.textContent = "Pedido recibido. Te contactamos pronto.";
            aviso.classList.add("exito");
            aviso.classList.remove("error");
        }
    }
    formulario.addEventListener("submit", revisarFormulario);
});