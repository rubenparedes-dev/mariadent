<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
Route::get('/', [ContactoController::class, 'inicio'])->name('inicio');
Route::get('/servicios', fn () => view('servicios'))->name('servicios');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::middleware('auth')->group(function () {

    Route::get('/panel', fn () => view('panel.inicio'))->name('panel');

    Route::get('/clientes', [ClienteController::class, 'index'])
        ->name('clientes.index');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes', ['juguetes' => $juguetes]);
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes-nuevo');
});

Route::post('/juguetes/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer|min:0'
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required' => 'Pone la cantidad de juguetes disponibles.',
        'stock.integer' => 'El stock debe ser un numero entero.',
        'stock.min' => 'El stock no puede ser negativo.'
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock')
    ]);

    return redirect('/juguetes');
});
