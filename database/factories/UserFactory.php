<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellidos' => $this->faker->word,
            'fechaNacimiento' => $this->faker->date,
            'telefono' => $this->faker->numberBetween(1111111111,9999999999),
            'estadoCivil' => $this->faker->word,
            'domicilio' => $this->faker->text(200),
            'email' => $this->faker->unique()->email,
            'password' => Hash::make('password'),

            'idHistoriaGeneral' =>$this->faker->numberBetween(1,10),
            'idHistoriaOdontologica' =>$this->faker->numberBetween(1,10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
