<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    // protected $model = Article::class;

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
            'excerpt' => $this->faker->paragraph(mt_rand(6, 8)),
            'body' => $this->faker->paragraph(mt_rand(3, 8)),
            'user_id' => 1,
            'category_id' => 1,
        ];
    }
}