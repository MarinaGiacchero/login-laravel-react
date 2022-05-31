<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Carbon\Factory;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Usuario $dados)
    {
     /*   $dados->create([
            'nome'=>'Marina',
            'data_cadastro' => now()
        ]);*/
        Usuario::factory()->count(20)->create();
    }
}
