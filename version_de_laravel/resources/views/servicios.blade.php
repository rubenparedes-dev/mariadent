<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios | Mariadent</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    <header>
        <h1>Servicios de Clínica Dental Mariadent</h1>
        <p>Atención odontológica para cuidar tu sonrisa.</p>
    </header>
    <nav><ul><li><a href="{{ route('inicio') }}">Inicio</a></li><li><a href="{{ route('servicios') }}">Servicios</a></li><li><a href="{{ route('inicio') }}#contactanos">Contacto</a></li></ul></nav>
    <main>
        <section class="fila">
            <article class="recuadro">
                <h2>Nuestros servicios</h2>
                <p>En Mariadent ofrecemos consulta dental, limpieza bucal, extracciones y atención odontológica personalizada.</p>
                <p>Para solicitar información o reservar una cita, completa el formulario de nuestra página principal.</p>
                <a class="boton" href="{{ route('inicio') }}#contactanos">Ir al formulario</a>
            </article>
            <figure class="imagen-lado"><img src="{{ asset('img/imagen2.jpg') }}" alt="Atención dental"></figure>
        </section>
    </main>
    <footer><p>2026 · Clínica Dental Mariadent</p></footer>
</body>
</html>
