<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class GuestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $age = rand(3, 100);
        return [
            'First_name'  => $this->faker->firstName(),
            'Last_name'  => $this->faker->lastName(),
            'phone'     => $age,
            'email' => $this->faker->unique()->safeEmail(),
            'passwors' => $this->faker->password(),
            'gender'           => $this->faker->randomElement(['male', 'female']),
            'age'              => $age,
            'passPortNo'       => $this->faker->numerify(),
            'address'          => $this->faker->address(),
            'number_of_person' => $this->faker->numberBetween(1 , 15),
            'city'             => $this->faker->city(),
            'conutry' => $this->faker->country()

        ];
    }
}
