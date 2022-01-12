<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'category_id'=>Category::factory(),
            'description' => $this->faker->text(),
            'preparation_time' => $this->faker->word(),
        ];
    }
}
