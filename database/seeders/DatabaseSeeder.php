<?php

namespace Database\Seeders;


use App\Models\Post;
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
        //User::truncate();
       // Category::truncate();
       // Post::truncate();
        $user=User::factory()->create([
            'name'=> 'Dr. Jerrod Berge DVM'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id,
        ]);

/*
      $user=\App\Models\User::factory()->create();

     $personal= Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
      ]);
        $work=Category::create([
            'name' => 'Work',
            'slug' => 'Work'
        ]);
        $hobbies=Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My Family Post',
            'slug'=> 'my-first-post',
            'excerpt'=> 'Lorem Ipsum is simply dummy text of the printing',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed quam tincidunt, malesuada nibh ac, euismod augue. Nulla facilisi. Aliquam erat volutpat. In eu lectus et ex tempor consectetur. Donec egestas, erat vel ultrices auctor, eros justo aliquam augue, eget mollis purus nunc vel turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac congue lectus, ut dignissim ante. Morbi eget justo et nisl ultricies euismod. Morbi congue erat tellus.',


        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed quam tincidunt, malesuada nibh ac, euismod augue. Nulla facilisi. Aliquam erat volutpat. In eu lectus et ex tempor consectetur. Donec egestas, erat vel ultrices auctor, eros justo aliquam augue, eget mollis purus nunc vel turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac congue lectus, ut dignissim ante. Morbi eget justo et nisl ultricies euismod. Morbi congue erat tellus.',


        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed quam tincidunt, malesuada nibh ac, euismod augue. Nulla facilisi. Aliquam erat volutpat. In eu lectus et ex tempor consectetur. Donec egestas, erat vel ultrices auctor, eros justo aliquam augue, eget mollis purus nunc vel turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac congue lectus, ut dignissim ante. Morbi eget justo et nisl ultricies euismod. Morbi congue erat tellus.',


        ]);*/
    }
}

