<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->truncate();
        Category::query()->truncate();
        $user=User::factory()->create();
        $hob=Category::create(['name' => 'Hobby', 'slug' => 'hobby']);
        $work=Category::create(['name' => 'Work', 'slug' => 'work']);
        Post::create(['user_id'=>$user->id,'Category_id'=>$work->id,'title'=>'tileeeee','body'=>'dasdsfasdfasd']);
    }
}
