<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Mariadent</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <h1>Clínica Dental Mariadent</h1>
    <p>Acceso administrativo</p>
</header>
<main class="contenedor">
    <section class="tarjeta login-tarjeta">
        <h2>Inicio de sesión</h2>
        <p>Ingrese sus credenciales para acceder al sistema.</p>
        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="campo-login">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}" required>
            </div>
            <div class="campo-login">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="boton">
                Ingresar
            </button>
        </form>
        <div class="acciones">
            <a href="{{ route('inicio') }}" class="boton">
                Volver a Mariadent
            </a>
        </div>
    </section>
</main>
<footer>
    Sistema de administración Mariadent - Ruben Marecelo Paredes Morales
</footer>
</body>
</html>