<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // user testing
        User::factory()->create([
            'name' => 'Burhan',
            'email' => 'dev.burhanuddin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        // create category
        Category::create([
            'name' => 'Web Developer',
            'slug' => 'Web Developer'
        ]);
        Category::create([
            'name' => 'Android Developer',
            'slug' => 'Android Developer'
        ]);

        // create 30 data articles
        Article::factory(9)->create();
        Project::factory(10)->create();
    }
}
