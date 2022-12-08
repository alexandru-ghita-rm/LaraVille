<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> Category::factory(),
            'title'=> $this->faker->sentence,
            'slug'=>$this->faker->slug,
            'summary'=> $this->faker->sentence,
            'body'=> $this->faker->paragraph,
            'price'=> $this->faker->paragraph,
        ];
    }
}
