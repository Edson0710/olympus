<?php

namespace Database\Seeders;
use App\Models\Servicio;

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Mascarilla exfoliante
        Servicio::create([
            'nombreServicio' => 'Mascarilla Exfoliante',
            'descripcionServicio' => 'Limpieza facial y aplicación de mascarilla exfoliante.',
            'precioServicio' => '120.00',
        ]);
        //Ritual de toalla caliente
        Servicio::create([
            'nombreServicio' => 'Ritual de Toalla Caliente',
            'descripcionServicio' => 'Ritual de toalla caliente para abrir los poros.',
            'precioServicio' => '150.00',
        ]);
        //Vapor con aromaterapia
        Servicio::create([
            'nombreServicio' => 'Vapor con aromaterapia',
            'descripcionServicio' => 'Limpieza facial, ritual de toalla caliente y mascarilla exfoliante incluido.',
            'precioServicio' => '250.00',
        ]);
        //Corte especial
        Servicio::create([
            'nombreServicio' => 'Corte especial',
            'descripcionServicio' => 'Corte de temporada a lo que se está usando en el momento.',
            'precioServicio' => '150.00',
        ]);
        //Delineado de barba
        Servicio::create([
            'nombreServicio' => 'Delineado de barba',
            'descripcionServicio' => 'Delineado de barba con navaja y limpieza con esencias frutales.',
            'precioServicio' => '250.00',
        ]);
        //Corte especial
        Servicio::create([
            'nombreServicio' => 'Pepinos relajantes',
            'descripcionServicio' => 'Exfoliación de cara con aromaterapia y pepinos.',
            'precioServicio' => '100.00',
        ]);
    }
}
