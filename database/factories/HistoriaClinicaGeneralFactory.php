<?php

namespace Database\Factories;

use App\Models\HistoriaClinicaGeneral;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriaClinicaGeneralFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistoriaClinicaGeneral::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'padreConVida' => $this->faker->boolean,
            'madreConVida' => $this->faker->boolean,
            'tieneHermanos' => $this->faker->boolean,
            'hermanosSanos' => $this->faker->boolean,
            'tratamientoMedico' => $this->faker->boolean,
            'realizaDeporte' => $this->faker->boolean,
            'alergiaMedicamento' => $this->faker->boolean,
            'cicatrizadoCorrecto' => $this->faker->boolean,
            'sangradoIntenso' => $this->faker->boolean,
            'hiperlaxitud' => $this->faker->boolean,
            'fiebreReumatica' => $this->faker->boolean,
            'diabetico' => $this->faker->boolean,
            'controlDiabetes' => $this->faker->boolean,
            'problemaCardiaco' => $this->faker->boolean,
            'tomaAnticoagulantes' => $this->faker->boolean,
            'presionAlta' => $this->faker->boolean,
            'chagas' => $this->faker->boolean,
            'problemaRenal' => $this->faker->boolean,
            'ulceraGastrica' => $this->faker->boolean,
            'hepatitis' => $this->faker->boolean,
            'problemaHepatico' => $this->faker->boolean,
            'convulsiones' => $this->faker->boolean,
            'epileptico' => $this->faker->boolean,
            'sifilisGonorrea' => $this->faker->boolean,
            'transfusiones' => $this->faker->boolean,
            'fueOperado' => $this->faker->boolean,
            'problemaRespiratorio' => $this->faker->boolean,
            'fuma' => $this->faker->boolean,
            'embarazo' => $this->faker->boolean,
            'enfermedadRecomendacionMedica' => $this->faker->boolean,
            'tratamientoAlternativo' => $this->faker->boolean,

            //Posibles nullos
            'enfermedadPadre' => $this->faker->sentence,
            'enfermedadMadre' => $this->faker->sentence,
            'enfermedadHermanos' => $this->faker->sentence,
            'tipoTratamientoMedico' => $this->faker->sentence,
            'medicamentosHabituales' => $this->faker->sentence,
            'medicamentosEnCincoAnios' => $this->faker->sentence,
            'tipoDeporte' => $this->faker->sentence,
            'malestarDeporte' => $this->faker->sentence,
            'medicinaAlergia' => $this->faker->sentence,
            'medicacionFiebre' => $this->faker->sentence,
            'medicacionDiabetes' => $this->faker->sentence,
            'tipoProblemaCardiaco' => $this->faker->sentence,
            'tipoAnticoagulantes' => $this->faker->sentence,
            'frecuenciaAnticoagulantes' => $this->faker->sentence,
            'tratamientoChagas' => $this->faker->boolean,
            'tipoHepatitis' => $this->faker->randomLetter,
            'tipoProblemaHepatico' => $this->faker->sentence,
            'medicamentoEpilepsia' => $this->faker->sentence,
            'enfermedadInfectoContagiosa' => $this->faker->sentence,
            'tipoOperacion' => $this->faker->sentence,
            'fechaOperacion' => $this->faker->date,
            'tipoProblemaRespiratorio' => $this->faker->sentence,
            'mesesEmbarazo' => $this->faker->randomDigit,
            'tipoRecomendacionMedica' => $this->faker->text,
            'tipoTratamientoAlternativo' => $this->faker->sentence,
            'medicoClinico' => $this->faker->name,
            'clinicaHospitalDerivacion' => $this->faker->sentence,

        ];
    }
}
