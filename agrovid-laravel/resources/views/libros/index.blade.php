@extends('layouts.base')

@section('title', 'Librería El Lápiz')
@section('h1', 'Librería El Lápiz')

@section('content')

    <p>Somos una librería de barrio que atiende con cariño a lectores de todas las edades.</p>

    <p>Hay {{ count($libros) }} libros en el catálogo.</p>

    <ul>
        @foreach ($libros as $libro)
            <li>{{ $libro->titulo }} - Bs{{ $libro->precio }}</li>
        @endforeach
    </ul>

    <p>Catálogo atendido por Ruben Chocamani Flores</p>

    <p><a href="/libros/nuevo">Registrar un nuevo libro</a></p>

@endsection
