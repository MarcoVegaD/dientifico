<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaClinicaOdontologicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinica_odontologicas', function (Blueprint $table) {
            $table->id();
            $table->text('razonConsulta')->nullable();
            $table->boolean('consultaPrevia');
            $table->text('detallesConsultaPrevia')->nullable();
            $table->boolean('medicamentoPrevio');
            $table->text('nombreMedicamentoPrevio')->nullable();
            $table->date('inicioMedicamentoPrevio')->nullable();
            $table->boolean('refiereDolor');
            $table->boolean('dolorSuave');
            $table->boolean('dolorModerado');
            $table->boolean('dolorIntenso');
            $table->boolean('dolorTemporario');
            $table->boolean('dolorIntermitente');
            $table->boolean('dolorContinuo');
            $table->boolean('dolorEspontaneo');
            $table->boolean('dolorProvocado');
            $table->boolean('dolorAlFrio');
            $table->boolean('dolorAlCalor');
            $table->boolean('dolorLocalizado');
            $table->string('lugarDolorLocalizado')->nullable();
            $table->boolean('dolorIrradiado');
            $table->string('lugarDolorIrradiado');
            $table->boolean('calmarDolor');
            $table->string('solucionCalmarDolor')->nullable();
            $table->boolean('golpeEnDientes');
            $table->date('fechaGolpeDientes')->nullable();
            $table->text('situacionGolpeDientes')->nullable();
            $table->boolean('fracturaEnDientes');
            $table->string('dientesFracturados')->nullable();
            $table->text('tratamientoFractura')->nullable();
            $table->boolean('dificultadParaHablar');
            $table->boolean('dificultadParaMasticar');
            $table->boolean('dificultadParaAbrir');
            $table->boolean('dificultadParaTragar');
            $table->boolean('anormalLabios');
            $table->boolean('anormalLengua');
            $table->boolean('anormalPaladar');
            $table->boolean('anormalPisoBoca');
            $table->boolean('anormalCarrillos');
            $table->boolean('anormalRebordes');
            $table->boolean('anormalTrigono');
            $table->boolean('anormalRetromolar');
            $table->boolean('manchas');
            $table->boolean('abultamientosTejido');
            $table->boolean('ulceraciones');
            $table->boolean('ampollas');
            $table->text('otrasLesionesPresentadas')->nullable();
            $table->boolean('sangradoEncias');
            $table->string('situacionSangradoEncias')->nullable();
            $table->boolean('pusEnBoca');
            $table->string('ubicacionPus')->nullable();
            $table->boolean('movilidadEnDientes');
            $table->boolean('dientesAltos');
            $table->boolean('caraInchada');
            $table->boolean('inchazonHielo');
            $table->boolean('inchazonCalor');
            $table->string('inchazonOtros')->nullable();
            $table->string('momentosAzucar')->nullable();
            $table->string('indicePlaca')->nullable();
            $table->enum('higieneBucal', ['Muy bueno', 'Bueno', 'Deficiente', 'Malo']);
            $table->boolean('presentaSarro');
            $table->boolean('enfermedadPeriodental');
            $table->longText('diagnosticoPresuntivo')->nullable();
            $table->longText('planDeTratamiento')->nullable();
            $table->longText('observaciones')->nullable();
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
        Schema::dropIfExists('historia_clinica_odontologicas');
    }
}
