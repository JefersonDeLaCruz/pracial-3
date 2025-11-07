@extends('layout.base')

@section('title', 'Inicio -DV23003')



@section('header')
    <div class="p-2">
        <h1 class="text-2xl font-bold text-blue-900">Navegacion de ejercicios</h1>
        <form action="{{ route('departamento.update', $departamento) }}" method="POST" class="w-[900px] mx-auto">
            @csrf
            @method('PUT')
            <div class="">
                <label for="" class="label">Ingrese el nombre del departamento</label>
                <input type="text" name="nombredepartamento" class="input w-full" value="{{ $departamento->nombredepartamento }}">
            </div>

            <div class="">
                <label for="" class="label">Ingrese el codigo del departamento</label>
                <input type="text" name="codigodepartamento" class="input w-full" value="{{ $departamento->codigodepartamento }}">
            </div>

            <div class="mt-7">
                <button type="submit" class="btn btn-info">Crear</button>
            </div>
        </form>
    </div>
@endsection

@section('content')

@endsection