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

    const formularioPedido = document.querySelector("#form-pedido");
    const avisoPedido = document.querySelector("#error-pedido");

    function revisarPedido(event) {
        event.preventDefault();

        const nombre = document.querySelector("#nombre").value;
        const celular = document.querySelector("#celular").value;
        const edad = document.querySelector("#edad").value;
        const correo = document.querySelector("#correo").value;
        const informacion = document.querySelector("#informacion").value;

        if (nombre === "") {
            avisoPedido.textContent = "Por favor, escribe tu nombre.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (isNaN(celular)) {
            avisoPedido.textContent = "El celular debe contener solo números.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (celular.length !== 8) {
            avisoPedido.textContent = "El celular debe tener exactamente 8 dígitos.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (celular[0] !== "6" && celular[0] !== "7") {
            avisoPedido.textContent = "El celular debe empezar con 6 o 7.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (edad === "" || isNaN(edad)) {
            avisoPedido.textContent = "Por favor, escribe tu edad (solo números).";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (correo === "") {
            avisoPedido.textContent = "Falta tu correo.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (correo.includes("@") === false) {
            avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (correo.includes(".") === false) {
            avisoPedido.textContent = "Ese correo no parece válido: le falta el punto.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (informacion === "") {
            avisoPedido.textContent = "Por favor, elige el tipo de servicio.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else {
            avisoPedido.textContent = "Consulta recibida. Pronto nos comunicaremos contigo.";
            avisoPedido.classList.add("exito");
            avisoPedido.classList.remove("error");
        }
    }
    formularioPedido.addEventListener("submit", revisarPedido);
});