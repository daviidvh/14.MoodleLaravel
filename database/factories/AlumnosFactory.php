<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\es_ES\Person;

class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new Person($this->faker));

        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->dni(),
            'fecha_nacimiento' => $this->faker->date,
            'numero_matricula' => $this->faker->unique()->randomNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Cambia 'password' según tus necesidades
        ];
    }
}
