<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Post;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Like;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Article::factory(10)->create();

        Post::factory(10)->create(); 
        Comment::factory(15)->create();
        Like::factory(30)->create();
    }
}
