<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEmpleado');
            $table->string('rolEmpleado');
            $table->string('generoEmpleado');
            $table->string('telefonoEmpleado');
            $table->string('curpEmpleado');
            $table->date('fecha_NacEmpleado');
            //$table->string('imagenEmpleado');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
