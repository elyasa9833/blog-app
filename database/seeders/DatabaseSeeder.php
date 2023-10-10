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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Amri Elyasa',
            'email' => 'elyasa@mail.com',
            'password' => bcrypt('elyasa')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, debitis.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis! Repudiandae fuga dignissimos, assumenda pariatur nobis dicta enim deserunt accusantium!',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
