@extends('layouts.base')
@section('contenido')
<h2>Lista de juguetes</h2>
<p>Bienvenidos a Jugueteria El Trompo, donde ofrecemos juguetes para la diversion de los niños.</p>
<p>Hay {{ count($juguetes) }} juguetes en el estante.</p>
<ul>
    @foreach ($juguetes as $juguete)
        <li>
            {{ $juguete->nombre }} - Bs {{ $juguete->precio }}
        </li>
    @endforeach
</ul>
<p>Estante atendido por Ruben Marcelo Paredes Morales</p>
<a href="/juguetes/nuevo">Agregar juguete</a>
@endsection