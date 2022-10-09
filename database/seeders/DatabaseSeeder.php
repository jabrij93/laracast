<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        \App\Models\User::factory(10)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p> Lorem ipsum dolar sit amet. </p>',
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis neque lectus, nec tincidunt arcu pharetra et. Pellentesque id tempus neque, id bibendum felis. Mauris rhoncus eget ipsum nec iaculis. Proin mattis porta odio, ut dictum velit faucibus ac. Fusce tempor dapibus elit, a dictum lorem maximus in. Donec scelerisque tortor lobortis eleifend scelerisque. Nunc venenatis ultrices ante eget mattis. Vivamus nunc arcu, dignissim vel egestas a, scelerisque quis lacus. Mauris consequat consequat lacus, non accumsan est pellentesque eu. Aliquam lorem mauris, dapibus at fringilla at, egestas eget nisi. Pellentesque in nunc orci. Sed vel luctus sem. Aenean vel rhoncus nisi, in maximus ligula. Nullam sit amet pharetra ipsum, at efficitur turpis. Nullam ultricies tellus posuere velit cursus, et eleifend elit sagittis. Vestibulum ut tellus sodales, placerat felis a, feugiat sapien. </p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p> Lorem ipsum dolar sit amet. </p>',
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis neque lectus, nec tincidunt arcu pharetra et. Pellentesque id tempus neque, id bibendum felis. Mauris rhoncus eget ipsum nec iaculis. Proin mattis porta odio, ut dictum velit faucibus ac. Fusce tempor dapibus elit, a dictum lorem maximus in. Donec scelerisque tortor lobortis eleifend scelerisque. Nunc venenatis ultrices ante eget mattis. Vivamus nunc arcu, dignissim vel egestas a, scelerisque quis lacus. Mauris consequat consequat lacus, non accumsan est pellentesque eu. Aliquam lorem mauris, dapibus at fringilla at, egestas eget nisi. Pellentesque in nunc orci. Sed vel luctus sem. Aenean vel rhoncus nisi, in maximus ligula. Nullam sit amet pharetra ipsum, at efficitur turpis. Nullam ultricies tellus posuere velit cursus, et eleifend elit sagittis. Vestibulum ut tellus sodales, placerat felis a, feugiat sapien. </p>'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
