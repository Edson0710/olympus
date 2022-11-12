<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregaForeignkeyCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Se creo este archivo a partir de que la tabla de empleado no se creo antes que la tabla de citas*/
        Schema::table('citas', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained();
            $table->unique(['fechaUsuarioCita','horaUsuarioCita', 'empleado_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->dropColumn('empleado_id');
        });
    }
}
