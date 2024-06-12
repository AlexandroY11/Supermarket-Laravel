<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => implode(' ', $this->faker->words(rand(1, 2))), 
            'slug' => $this->faker->slug(),
            'categoria' => $this->faker->randomElement(['Edredones', 'Sabanas', 'Colchas', 'Cortinas', 'Toallas']), 
            'descripcion' => $this->faker->sentence(10),
            'medida' => $this->faker->randomElement(['King', 'Queen', 'Doble', 'Semidoble']),
            'precio' => $this->faker->randomFloat(0, 1000, 50000),
            'stock' => $this->faker->randomNumber(2)
        ];
    }
}
