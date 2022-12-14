<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuarioCita');
            $table->string('emailUsuarioCita');
            /* $table->boolean('confirmacionUsuarioCita'); */
            $table->date('fechaUsuarioCita');
            /* $table->integer('calificacionUsuarioCita'); */
            $table->string('celularUsuarioCita');
            $table->time('horaUsuarioCita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
