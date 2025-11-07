<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /** @use HasFactory<\Database\Factories\DepartamentoFactory> */
    use HasFactory;

    protected $fillable = ['nombredepartamento', 'codigodepartamento'];

    public function cliente(){
        return $this->hasMany(Cliente::class);
    }
}
