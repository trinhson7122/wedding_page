<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartDetail>
 */
class CartDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_cart' => fake()->randomElement(Cart::pluck('id')),
            'id_product' => fake()->randomElement(Product::pluck('id')),
            'amount' => random_int(1, 5),
        ];
    }
}
