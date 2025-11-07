<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditoController extends Controller
{
    //

    public function index(){
        return view("credito.index");
    }

    public function calculo(Request $request){

        $capital = $request->post('capital');
        $tasa = $request->post('tasa');
        $cuotas = $request->post('cuotas');

        $n = $cuotas;

        $tabla = [];

        $iteracion = [];
        $tabla[] = $cuotas;
        
        for ($i=0; $i < $n; $i++) { 
            # code...
            $saldo_pendiente = $capital * ($tasa * (1+$tasa)**$n) / ((1+$tasa)**$n - 1);
            $capital -= $tasa*($saldo_pendiente);
            $iteracion[] = [$saldo_pendiente];
            $tabla[] = $iteracion;
        }

        return view('credito.tabla', compact('iteracion'));
    }
}
