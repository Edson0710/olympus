<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Corte;

class CorteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Corte::create(['nombreCorte' => 'Desvanecido', 
        'estiloCorte' => 'Formal', 
        'descripcionCorte' => 'Se trata de un tipo de corte de pelo degradado, 
            donde el cabello está muy recortado en la nuca, patillas y laterales de la cabeza, 
            volviéndose más largo en la parte superior de la misma.']);
    }
}
