<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departamentos = Departamento::all();
        return view("departamento.index", compact("departamentos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("departamento.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nombredepartamento' => 'required|string|max:300',
            'codigodepartamento' => 'required|string|max:100',
        ]);

        Departamento::create($validated);

        return redirect()->route('departamento.index')->with('exito','Departamento creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        //
        return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
         $validated = $request->validate([
            'nombredepartamento' => 'required|string|max:300',
            'codigodepartamento' => 'required|string|max:100',
        ]);

        $departamento->update($validated);

        return redirect()->route('departamento.index')->with('exito','Departamento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
        // dd($departamento);
        // $test = Departamento::where( 'id', $departamento->id )->first();
        // dd($test);
        $departamento->delete();
        return redirect()->route('departamento.index')->with('exito',"Departamento  eliminado con exito");
    }
}
