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
            'nombre_producto' => implode(' ', $this->faker->words(rand(1, 2))), 
            'categoria' => $this->faker->randomElement(['Lacteos', 'Granos', 'Confitería', 'Carnes', 'Embutidos']), 
            'precio' => $this->faker->randomFloat(0, 1000, 50000),
            'stock' => $this->faker->randomNumber(2)
        ];
    }
}
