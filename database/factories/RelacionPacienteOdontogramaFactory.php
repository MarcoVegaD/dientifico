<?php

namespace Database\Factories;

use App\Models\RelacionPacienteOdontograma;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelacionPacienteOdontogramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RelacionPacienteOdontograma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'idOdontograma' =>$this->faker->numberBetween(1,10),
            'idUsuario' =>$this->faker->numberBetween(1,10),
        ];
    }
}
