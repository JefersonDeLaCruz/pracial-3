@extends('layout.base')

@section('title', 'Inicio -DV23003')



@section('header')
    <div class="p-2">
        <h1 class="text-2xl font-bold text-blue-900">Navegacion de ejercicios</h1>
        <ul>
            <li class="text-2xl font-bold text-green-900"><a href="{{ route('credito') }}">Ejercicio 1</a></li>
            <li class="text-2xl font-bold text-green-900"><a href="{{ route('departamento.index') }}">Ejercicio 2</a></li>
        </ul>
    </div>
@endsection

@section('content')

@endsection