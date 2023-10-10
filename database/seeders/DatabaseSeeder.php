<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();
        Post::factory(5)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

    }
}
