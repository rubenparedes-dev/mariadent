<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ContactoController extends Controller
{
    public function inicio(): View
    {
        return view('mariadent');
    }
    public function enviar(Request $request): View|RedirectResponse
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'celular' => ['required', 'regex:/^[67][0-9]{7}$/'],
            'edad' => ['required', 'integer', 'between:1,120'],
            'correo' => ['required', 'email', 'max:255'],
            'mensaje' => ['nullable', 'string', 'max:3000'],
            'informacion' => ['required', 'in:extraccion,limpieza,placas,consulta,otros'],
        ], [
            'celular.regex' => 'El celular debe tener 8 dígitos y empezar con 6 o 7.',
            'informacion.required' => 'Debes seleccionar un servicio.',
        ]);
        return view('contacto-resultado', ['datos' => $datos]);
    }
}