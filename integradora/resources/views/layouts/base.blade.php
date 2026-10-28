<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugueteria El Trompo</title>
    <link rel="stylesheet" href="{{ asset('css/juguetes.css') }}">
</head>
<body>

    <header>
        <h1>Jugueteria El Trompo</h1>
    </header>

    <nav>
        <a href="/juguetes">Lista de juguetes</a>
        <a href="/juguetes/nuevo">Registrar juguete</a>
        <a href="/">Mariadent</a>
    </nav>

    <hr>

    <main>
        @yield('contenido')
    </main>

    <hr>

    <footer>
        Integradora - Ruben Marcelo Paredes Morales - 27 de octubre de 2026
    </footer>

</body>
</html>