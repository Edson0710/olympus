<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->constrained()->cascadeOnDelete();
            $table->string('ubicacionFileEmpleado');
            $table->string('nombreOriginalEmpleado');
            // Multipurpose Internet Mail Extensions para identicar tipos de archivos a través de Internet
            $table->string('mime');
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
        Schema::dropIfExists('empleado_images');
    }
}
