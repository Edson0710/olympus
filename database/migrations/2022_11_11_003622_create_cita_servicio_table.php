<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_servicio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('citas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('servicio_id')->constrained('servicios')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_servicio');
    }
}
