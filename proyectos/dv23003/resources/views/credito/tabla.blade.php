@extends('layout.base')

@section('title', 'Departamentos -DV23003')



@section('header')
    
@endsection

@section('content')
<div class="w-[1200px] mx-auto p-1">
    @if (session('exito'))
    <x-alerta mensaje="{{ session('exito') }}">
    
    @endif

    </x-alerta>
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold text-blue-900">resultado</h1>
        <!-- <a href="{{ route('departamento.create') }}" class="btn btn-primary">Crear nuevo departamento</a> -->
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Codigo</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($iteracion as $it)
                    <tr>
                        <!-- <td>{{ $it }}</td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection