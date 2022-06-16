<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work =  Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'title' => Str::random(10),
            'excerpt' => Str::random(50),
            'body' => Str::random(100),
        ]);

    }
}
