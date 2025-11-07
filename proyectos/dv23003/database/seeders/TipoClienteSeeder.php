<?php

namespace Database\Seeders;

use App\Models\TipoCliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        TipoCliente::factory()->count(10)->create();
    }
}
