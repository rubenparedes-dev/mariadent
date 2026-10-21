document.addEventListener("DOMContentLoaded", () => {  
    const formulario = document.querySelector("#form-turno");
    const aviso = document.querySelector("#aviso-turno");
    function revisarFormulario(event) {       
        const nombre = document.querySelector("#nombre").value;
        const correo = document.querySelector("#correo").value;

        if (nombre === "" && correo === "") {
            event.preventDefault();
            aviso.textContent = "Nos falta tu nombre y tu correo para darte el turno.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        }
        else if (nombre === "") {
            event.preventDefault();
            aviso.textContent = "Nos falta tu nombre para darte el turno.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        } 
        else if (correo === "") {
            event.preventDefault();
            aviso.textContent = "Nos falta tu correo para darte el turno.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        }
        else if (correo.includes("@") === false) {
            event.preventDefault();
            aviso.textContent = "Revisa tu correo - le falta el arroba.";
            aviso.classList.add("error");
            aviso.classList.remove("exito");
        } 
        else {
            aviso.textContent = "Turno reservado - te atiende Ruben Marcelo Paredes Morales";
            aviso.classList.add("exito");
            aviso.classList.remove("error");
        }
    }
    formulario.addEventListener("submit", revisarFormulario);
});