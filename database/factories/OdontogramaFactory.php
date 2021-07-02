<?php

namespace Database\Factories;

use App\Models\Odontograma;
use Illuminate\Database\Eloquent\Factories\Factory;

class OdontogramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Odontograma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'idDiente' =>$this->faker->numberBetween(11,85),
            'idDiagrama' =>$this->faker->numberBetween(1,10),
            'carie' =>$this->faker->boolean,
            'restauracion' =>$this->faker->boolean,
            'ausente' =>$this->faker->boolean,
            'protesisFija' =>$this->faker->boolean,
            'protesisRemovible' =>$this->faker->boolean,
            'corona' =>$this->faker->boolean,
            'notaDiente' =>$this->faker->text,
        ];
    }
}
