<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('favorites', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category');
        $table->text('description');
        $table->integer('rating');
        $table->decimal('price', 8, 2);
        $table->integer('calories');
        $table->integer('favorite_level');
        $table->timestamps();
    });

}

    /**
     * Reverse the migrations.
     */
   public function definition(): array
{
    return [
        'name' => fake()->randomElement([
            'Matcha Latte',
            'Sisig',
            'Ramen',
            'Coffee',
            'Mango Graham Shake'
        ]),
        'category' => fake()->randomElement(['Food', 'Drink']),
        'description' => fake()->sentence(),
        'rating' => fake()->numberBetween(1, 10),
        'price' => fake()->randomFloat(2, 50, 500),
        'calories' => fake()->numberBetween(100, 1200),
        'favorite_level' => fake()->numberBetween(1, 10),
        
    ];
}
};
