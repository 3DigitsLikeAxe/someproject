<?php

namespace Database\Factories;

use App\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			"user_id" =>factory(\App\User::class),
            "img" => "1.jpg",
			"description" => $this->faker->sentence,
			"text" => $this->faker->paragraph,
        ];
    }
}
