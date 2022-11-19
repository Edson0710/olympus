<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorteImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corte_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('corte_id');
            $table->string('ubicacionFileCorte');
            $table->string('nombreOriginalCorte');
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
        Schema::dropIfExists('corte_images');
    }
}
