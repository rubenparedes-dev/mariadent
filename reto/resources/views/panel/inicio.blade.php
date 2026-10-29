<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administrativo - Mariadent</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <h1>Clínica Dental Mariadent</h1>
    <p>Panel de administración</p>
</header>
<main class="contenedor">
    <section class="tarjeta">
        <h2>Bienvenido, {{ Auth::user()->name }}</h2>
        <p>Desde este panel puedes consultar los clientes registrados en Mariadent.</p>
        <div class="acciones">
            <a href="{{ route('clientes.index') }}" class="boton">
                Registro de clientes
            </a>
            <a href="{{ route('inicio') }}" class="boton">
                Ir a Mariadent
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="boton boton-salir">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </section>
</main>
<footer>
    Sistema de administración Mariadent Ruben Marcelo Paredes Morales
</footer>
</body>
</html>