<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    protected $fillable = ['nombre', 'telefono', 'idtipocliente', 'iddepartamento'];

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function tipoCliente(){
        return $this->belongsTo(TipoCliente::class);
    }
}
