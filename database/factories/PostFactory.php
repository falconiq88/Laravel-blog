<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'slug' => $this->faker->slug,
            'category_id'=>Category::factory(),
            'title'=>$this->faker->sentence,
            'excerpt'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,
            'image'=>$this->faker->image()
            //
        ];
    }
}
