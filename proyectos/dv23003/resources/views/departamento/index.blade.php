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
        <h1 class="text-2xl font-bold text-blue-900">Gestion de departamentos</h1>
        <a href="{{ route('departamento.create') }}" class="btn btn-primary">Crear nuevo departamento</a>
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
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->id }}</td>
                        <td>{{ $departamento->nombredepartamento }}</td>
                        <td>{{ $departamento->codigodepartamento }}</td>
                        <td class="flex gap-4">
                            <a href="{{ route('departamento.edit', $departamento) }}" class="btn btn-info">Editar</a>




                            <form action="{{ route('departamento.destroy', $departamento) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <input type="submit" name="" id="" value="Eliminar" class="btn btn-secondary">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection