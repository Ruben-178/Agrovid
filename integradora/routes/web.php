<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Libro;

Route::get('/', function () {
    $productos = Producto::all();
    return view('inicio', ['productos' => $productos]);
});

Route::get('/contacto', function () {
    return view('contacto');
});

// Muestra el formulario vacío
Route::get('/productos/crear', function () {
    return view('crear-producto');
});

// Recibe los datos del formulario y los guarda
Route::post('/productos', function (Request $request) {
    $datos = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric',
    ]);

    Producto::create($datos);

    return redirect('/')->with('mensaje', 'Producto agregado con éxito');
});

// ===== INTEGRADORA: Librería El Lápiz =====

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.index', ['libros' => $libros]);
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {
    request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer',
    ], [
        'titulo.required' => 'Falta el título del libro.',
        'precio.required' => 'Falta el precio del libro.',
        'precio.integer' => 'Ese precio no es un número entero.',
    ]);

    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/libros');
});