<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaClinicaGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinica_generals', function (Blueprint $table) {
            $table->id();
            $table->boolean('padreConVida');
            $table->string('enfermedadPadre')->nullable();
            $table->boolean('madreConVida');
            $table->string('enfermedadMadre')->nullable();
            $table->boolean('tieneHermanos');
            $table->boolean('hermanosSanos');
            $table->string('enfermedadHermanos')->nullable();
            $table->boolean('tratamientoMedico');
            $table->string('tipoTratamientoMedico')->nullable();
            $table->text('medicamentosHabituales')->nullable();
            $table->text('medicamentosEnCincoAnios')->nullable();
            $table->boolean('realizaDeporte');
            $table->string('tipoDeporte')->nullable();
            $table->string('malestarDeporte')->nullable();
            $table->boolean('alergiaMedicamento');
            $table->string('medicinaAlergia')->nullable();
            $table->boolean('cicatrizadoCorrecto');
            $table->boolean('sangradoIntenso');
            $table->boolean('hiperlaxitud')->default(false);
            $table->boolean('fiebreReumatica');
            $table->string('medicacionFiebre')->nullable();
            $table->boolean('diabetico');
            $table->boolean('controlDiabetes');
            $table->text('medicacionDiabetes')->nullable();
            $table->boolean('problemaCardiaco');
            $table->string('tipoProblemaCardiaco')->nullable();
            $table->boolean('tomaAnticoagulantes');
            $table->string('tipoAnticoagulantes')->nullable();
            $table->string('frecuenciaAnticoagulantes')->nullable();
            $table->boolean('presionAlta');
            $table->boolean('chagas');
            $table->boolean('tratamientoChagas')->nullable();
            $table->boolean('problemaRenal');
            $table->boolean('ulceraGastrica');
            $table->boolean('hepatitis');
            $table->string('tipoHepatitis', 5)->nullable();
            $table->boolean('problemaHepatico');
            $table->string('tipoProblemaHepatico')->nullable();
            $table->boolean('convulsiones');
            $table->boolean('epileptico');
            $table->string('medicamentoEpilepsia')->nullable();
            $table->boolean('sifilisGonorrea');
            $table->string('enfermedadInfectoContagiosa')->nullable(); 
            $table->boolean('transfusiones');
            $table->boolean('fueOperado');
            $table->string('tipoOperacion')->nullable();
            $table->date('fechaOperacion')->nullable();
            $table->boolean('problemaRespiratorio');
            $table->string('tipoProblemaRespiratorio')->nullable();
            $table->boolean('fuma');
            $table->boolean('embarazo');
            $table->smallInteger('mesesEmbarazo')->nullable();
            $table->boolean('enfermedadRecomendacionMedica');
            $table->text('tipoRecomendacionMedica')->nullable();
            $table->boolean('tratamientoAlternativo');
            $table->string('tipoTratamientoAlternativo')->nullable();
            $table->string('medicoClinico')->nullable();
            $table->string('clinicaHospitalDerivacion')->nullable();
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
        Schema::dropIfExists('historia_clinica_generals');
    }
}
