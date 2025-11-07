@extends('layout.base')

@section('title', 'Inicio -DV23003')



@section('header')
    <div class="p-2">
        <h1 class="text-2xl font-bold text-blue-900">Navegacion de ejercicios</h1>
        <form action="{{ route('calcular') }}" method="POST" class="w-[900px] mx-auto">
            @csrf

            <div class="">
                <label for="" class="label">Ingrese capital del prestamo</label>
                <input type="text" name="capital" class="input w-full">
            </div>

            <div class="">
                <label for="" class="label">Ingrese la tasa de interes mensual (en decimal por ejemplo 0.15)</label>
                <input type="text" name="tasa" class="input w-full">
            </div>
            <div class="">
                <label for="" class="label">numero de cuotas de plazo</label>
                <input type="text" name="cuotas" class="input w-full">
            </div>

            <div class="mt-7">
                <button type="submit" class="btn btn-info">Calcular</button>
            </div>
        </form>
    </div>
@endsection

@section('content')

@endsection