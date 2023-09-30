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
            'batch' => $this->faker->unique()->randomNumber(8),
            'stock' => $this->faker->unique()->randomNumber(3),
            'due_date' =>$this->faker->dateTimeBetween('tomorrow', '+100 days'),
        ];
    }
}
