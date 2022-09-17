<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale,
            'category_id' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'desc' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'image' => '/storage/images/product.jpg'
        ];
    }
}
