<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_category' => fake()->randomElement(Category::pluck('id')),
            'id_type' => fake()->randomElement(Type::pluck('id')),
            'name' => fake()->name(),
            'price' => '20000000',
            'note' => 'Không',
        ];
    }
}
