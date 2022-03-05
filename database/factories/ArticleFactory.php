<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Article;

class ArticleFactory extends Factory
{
    /**
     * @return void
     */
    public function run()
    {
        Article::factory()->count(10)->create();
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->string,
            'excerpt' => $this->faker->text(10),
            'body' => $this->faker->text(10),
            'class' => 'blog-post',
            'link' =>$this->faker->string,
        ];
    }
}
