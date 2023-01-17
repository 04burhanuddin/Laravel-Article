<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(360, 360, 'programming', true),
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'excerpt' => $this->faker->paragraph(),
            'source_code' => $this->faker->imageUrl(360, 360, 'programming', true),
            'user_id' => 1,
            'category_id' => 2,
        ];
    }
}
