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
        console.log("Cambiando de modo...");
    }

    botonModo.addEventListener("click", alternarModo);
});

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
    menu.classList.toggle("abierto");
    console.log("Abriendo/cerrando menú...");
}

botonMenu.addEventListener("click", alternarMenu);