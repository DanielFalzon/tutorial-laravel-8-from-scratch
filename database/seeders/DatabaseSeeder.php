<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use http\Params;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        $category = Category::factory()->create([
            'name' => 'With Posts',
            'slug' => 'with-posts'
        ]);
        Post::factory(5)->create([
            'category_id' => $category->id
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        Post::factory(20)->create();
    }
}
