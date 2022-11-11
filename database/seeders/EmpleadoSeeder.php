<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empleado Axl
        Empleado::create([
            'nombreEmpleado' => 'Axl Coronado',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3310906952',
            'curpEmpleado' => 'COCB02030412345678',
            'fecha_NacEmpleado' => '2002-03-04',
        ]);
        //Empleado Fernando
        Empleado::create([
            'nombreEmpleado' => 'Fernando Medina',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3332389302',
            'curpEmpleado' => 'MEGM01111412345678',
            'fecha_NacEmpleado' => '2001-11-14',
        ]);
        //Empleado Eduardo
        Empleado::create([
            'nombreEmpleado' => 'Eduardo Martinez',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3311804213',
            'curpEmpleado' => 'MAHJ02030412345678',
            'fecha_NacEmpleado' => '2002-09-08',
        ]);
        //Empleado Angel
        Empleado::create([
            'nombreEmpleado' => 'Angel Diaz',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3310836028',
            'curpEmpleado' => 'DIXA02012612345678',
            'fecha_NacEmpleado' => '2002-01-26',
        ]);
        //Empleado Miguel
        Empleado::create([
            'nombreEmpleado' => 'Miguel Mendoza',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3320852708',
            'curpEmpleado' => 'MEGM02030412345678',
            'fecha_NacEmpleado' => '2002-08-12',
        ]);
        //Empleado Edson
        Empleado::create([
            'nombreEmpleado' => 'Edson Navarro',
            'rolEmpleado' => 'Barbero',
            'generoEmpleado' => 'Masculino',
            'telefonoEmpleado' => '3334995142',
            'curpEmpleado' => 'NABE02030412345678',
            'fecha_NacEmpleado' => '2002-03-04',
        ]);
    }
}
