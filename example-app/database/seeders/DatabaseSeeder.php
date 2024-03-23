<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user=User::factory()->create();
        $personal=Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        $family=Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        $work=Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
      
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title'=>'My Family Post',
            'slug'=>'my-first-post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem Ipsum is simply dummy text.'
             
             
         ]);
         Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem Ipsum is simply dummy text.'
             
             
         ]);
        
      }
}

