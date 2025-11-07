<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    /** @use HasFactory<\Database\Factories\TipoClienteFactory> */
    use HasFactory;

    protected $fillable = ['descripcion_tipo'];

    public function cliente(){
        return $this->hasMany(Cliente::class);
    }
}
