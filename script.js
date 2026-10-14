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
        const correo = document.querySelector("#correo").value;
        if (nombre === "") {
            avisoPedido.textContent = "Falta tu nombre, caserito.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else if (correo.includes("@") === false) {
            avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
            avisoPedido.classList.add("error");
            avisoPedido.classList.remove("exito");
        } else {
            avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
            avisoPedido.classList.add("exito");
            avisoPedido.classList.remove("error");
        }
    }
    formularioPedido.addEventListener("submit", revisarPedido);
});