<?php

namespace Database\Factories;

use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratamientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tratamiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'notaTratamiento' =>$this->faker->text,
            'idOdontograma' =>$this->faker->numberBetween(1,10),
            'idUsuario' =>$this->faker->numberBetween(1,10),
        ];
    }
}
