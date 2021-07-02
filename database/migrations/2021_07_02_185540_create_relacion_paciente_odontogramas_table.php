<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionPacienteOdontogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_paciente_odontogramas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idOdontograma')->references('id')->on('Odontogramas');
            $table->unsignedBigInteger('idUsuario')->references('id')->on('users');
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
        Schema::dropIfExists('relacion_paciente_odontogramas');
    }
}
