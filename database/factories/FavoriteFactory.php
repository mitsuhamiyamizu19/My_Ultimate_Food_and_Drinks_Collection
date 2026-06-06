<?php

namespace Database\Factories;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    protected $model = Favorite::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Adobo',
                'Sinigang',
                'Kare-Kare',
                'Sisig',
                'Lechon',
                'Bulalo',
                'Pancit',
                'Lumpia',
                'Ramen',
                'Sushi',
                'Pizza',
                'Burger',
                'Spaghetti',
                'Fried Chicken',
                'Steak',
                'Coffee',
                'Matcha Latte',
                'Milk Tea',
                'Mango Shake',
                'Iced Tea',
                'Orange Juice',
                'Lemonade',
                'Hot Chocolate',
                'Cappuccino',
                'Espresso',
                'Smoothie',
                'Coke',
                'Pepsi',
                'Water',
                'Fruit Shake',
            ]),

            'category' => fake()->randomElement([
                'Food',
                'Drink',
            ]),

            'description' => fake()->sentence(10),

            'rating' => fake()->numberBetween(1, 10),

            'price' => fake()->numberBetween(50, 500),

            'calories' => fake()->numberBetween(100, 1200),

            'favorite_level' => fake()->numberBetween(1, 10),
        ];
    }
}