@extends('layouts.base')
@section('contenido')
<h2>Registrar juguete</h2>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/juguetes/nuevo" method="POST">
    @csrf
    <label for="nombre">Nombre del juguete:</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
    <br><br>
    <label for="precio">Precio en Bs:</label>
    <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
    <br><br>
    <button type="submit">Registrar juguete</button>
</form>
<br>
<a href="/juguetes">Volver a la lista</a>
@endsection