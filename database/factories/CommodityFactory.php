<?php

namespace Database\Factories;

use App\Models\Commodity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commodity>
 */
class CommodityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Commodity::class;
     
    public function definition(): array
    {
        return [
            'name' => fake('ja_JP')->word(),
            'description' => fake('ja_JP')->sentence(),
            'price' => fake()->numberBetween(500, 10000),
            'image_url' => 'https://placehold.jp/150x150.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}