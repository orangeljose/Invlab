<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence(),
            'batch' => $this->faker->randomNumber(8),
            'type' => $this->faker->randomElement(['Insumo', 'Material', 'Reactivo']),
            'brand' => $this->faker->randomElement(['Labtest', 'Egens', 'Jaffer']),
            'unit' => $this->faker->randomElement(['Pieza', 'Caja', 'Botella']),
            'min_stock' => $this->faker->randomNumber(1),
            'max_stock' => $this->faker->randomNumber(3),
            'due_date' =>$this->faker->dateTimeBetween('tomorrow', '+100 days'),
        ];
    }
}
