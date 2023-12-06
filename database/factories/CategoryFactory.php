<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'image' => $this->faker->word.'.jpg',
            'parent_id' => '0',
        ];
    }
}
