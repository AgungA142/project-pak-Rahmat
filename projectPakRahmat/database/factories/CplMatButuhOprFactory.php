<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CplMatButuhOpr>
 */
class CplMatButuhOprFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'butuh' => $this->faker->randomDigit(),
            'kurang' => $this->faker->randomDigit(),
            'stasiunKerja' => $this->faker->sentence(1),
        ];
    }
}
