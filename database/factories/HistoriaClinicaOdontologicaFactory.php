<?php

namespace Database\Factories;

use App\Models\HistoriaClinicaOdontologica;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriaClinicaOdontologicaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistoriaClinicaOdontologica::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'consultaPrevia' => $this->faker->boolean,
            'medicamentoPrevio' => $this->faker->boolean,
            'refiereDolor' => $this->faker->boolean,
            'dolorSuave' => $this->faker->boolean,
            'dolorModerado' => $this->faker->boolean,
            'dolorIntenso' => $this->faker->boolean,
            'dolorTemporario' => $this->faker->boolean,
            'dolorIntermitente' => $this->faker->boolean,
            'dolorContinuo' => $this->faker->boolean,
            'dolorEspontaneo' => $this->faker->boolean,
            'dolorProvocado' => $this->faker->boolean,
            'dolorAlFrio' => $this->faker->boolean,
            'dolorAlCalor' => $this->faker->boolean,
            'dolorLocalizado' => $this->faker->boolean,
            'dolorIrradiado' => $this->faker->boolean,
            'lugarDolorIrradiado' => $this->faker->word,
            'calmarDolor' => $this->faker->boolean,
            'golpeEnDientes' => $this->faker->boolean,
            'fracturaEnDientes' => $this->faker->boolean,
            'dificultadParaHablar' => $this->faker->boolean,
            'dificultadParaMasticar' => $this->faker->boolean,
            'dificultadParaAbrir' => $this->faker->boolean,
            'dificultadParaTragar' => $this->faker->boolean,
            'anormalLabios' => $this->faker->boolean,
            'anormalLengua' => $this->faker->boolean,
            'anormalPaladar' => $this->faker->boolean,
            'anormalPisoBoca' => $this->faker->boolean,
            'anormalCarrillos' => $this->faker->boolean,
            'anormalRebordes' => $this->faker->boolean,
            'anormalTrigono' => $this->faker->boolean,
            'anormalRetromolar' => $this->faker->boolean,
            'manchas' => $this->faker->boolean,
            'abultamientosTejido' => $this->faker->boolean,
            'ulceraciones' => $this->faker->boolean,
            'ampollas' => $this->faker->boolean,
            'sangradoEncias' => $this->faker->boolean,
            'pusEnBoca' => $this->faker->boolean,
            'movilidadEnDientes' => $this->faker->boolean,
            'dientesAltos' => $this->faker->boolean,
            'caraInchada' => $this->faker->boolean,
            'inchazonHielo' => $this->faker->boolean,
            'inchazonCalor' => $this->faker->boolean,
            'higieneBucal' => $this->faker->randomElement(['Muy bueno', 'Bueno', 'Deficiente', 'Malo']),
            'presentaSarro' => $this->faker->boolean,
            'enfermedadPeriodental' => $this->faker->boolean,

            //Posibles nulos
            'razonConsulta' => $this->faker->text,
            'detallesConsultaPrevia' => $this->faker->text,
            'nombreMedicamentoPrevio' => $this->faker->sentence,
            'inicioMedicamentoPrevio' => $this->faker->date,
            'lugarDolorLocalizado' => $this->faker->sentence,
            'solucionCalmarDolor' => $this->faker->sentence,
            'fechaGolpeDientes' => $this->faker->date,
            'situacionGolpeDientes' => $this->faker->text,
            'dientesFracturados' => $this->faker->sentence,
            'tratamientoFractura' => $this->faker->text,
            'otrasLesionesPresentadas' => $this->faker->sentence,
            'situacionSangradoEncias' => $this->faker->sentence,
            'ubicacionPus' => $this->faker->sentence,
            'inchazonOtros' => $this->faker->sentence,
            'momentosAzucar' => $this->faker->sentence,
            'indicePlaca' => $this->faker->sentence,
            'diagnosticoPresuntivo' => $this->faker->text,
            'planDeTratamiento' => $this->faker->text,
            'observaciones' => $this->faker->sentence,

        ];
    }
}
