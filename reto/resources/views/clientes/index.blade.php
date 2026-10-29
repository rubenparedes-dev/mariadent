<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes - Mariadent</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <h1>Clínica Dental Mariadent</h1>
    <p>Registro de clientes</p>
</header>
<main class="contenedor">
    <section class="tarjeta">
        <h2>Clientes registrados</h2>
        <p>Total de clientes: <strong>{{ $clientes->count() }}</strong></p>
        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>N.º</th>
                        <th>Nombre</th>
                        <th>Celular</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Servicio</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->celular }}</td>
                            <td>{{ $cliente->edad }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>{{ $cliente->informacion }}</td>
                            <td>{{ $cliente->mensaje }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No existen clientes registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="acciones">
            <a href="{{ route('panel') }}" class="boton">
                Volver al panel
            </a>
        </div>
    </section>
</main>
<footer>
    Sistema de administración Mariadent - Ruben Marecelo Paredes Morales
</footer>
</body>
</html>