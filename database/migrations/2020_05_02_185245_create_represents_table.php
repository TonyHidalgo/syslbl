<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('represents', function (Blueprint $table) {
            $table->id();
            $table->string('DRApellidos');
            $table->string('DRNombres');
            $table->string('DRCedula');
            $table->string('DRProfesion')->nullable();
            $table->string('DRDestrezas')->nullable();
            $table->string('DRCorreoElectronico')->nullable();
            $table->longText('DRDireccionTrabajo')->nullable();
            $table->string('DRTelefonoTrabajo')->nullable();
            $table->longText('DRDireccionHabitacion')->nullable();
            $table->string('DRTelefonoHabitacion')->nullable();
            $table->string('DRFoto');
            
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
        Schema::dropIfExists('represents');
    }
}
