<?php

namespace Database\Factories;

use App\Models\Departamento;
use App\Models\TipoCliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
            'idtipocliente' => TipoCliente::factory(),
            'iddepartamento' => Departamento::factory(),
        ];
    }
}
