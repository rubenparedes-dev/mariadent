<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario recibido — Mariadent</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
<header><h1>Clínica Dental Mariadent</h1></header>
<main>
    <article class="recuadro">
        <h2>Datos recibidos</h2>
        <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
        <p><strong>Celular:</strong> {{ $datos['celular'] }}</p>
        <p><strong>Edad:</strong> {{ $datos['edad'] }}</p>
        <p><strong>Correo:</strong> {{ $datos['correo'] }}</p>
        <p><strong>Servicio elegido:</strong> {{ $datos['informacion'] }}</p>
        <p><strong>Mensaje:</strong> {{ $datos['mensaje'] ?? '' }}</p>
        <a class="boton" href="{{ route('inicio') }}#contactanos">Volver al formulario</a>
    </article>
</main>
</body>
</html>
