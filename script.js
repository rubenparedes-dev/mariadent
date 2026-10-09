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