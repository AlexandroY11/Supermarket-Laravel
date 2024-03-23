<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_categoria' => $this->faker->randomElement(['Edredones', 'Sabanas', 'Colchas', 'Cortinas', 'Toallas']), 
            'descripcion_categoria' => $this->faker->sentence(10) 
        ];
    }
}
