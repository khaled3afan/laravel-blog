<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->title();
        $slug  = $title;
        return [
            'title'     => $title,
            'content'   => $this->faker->text(),
            'slug'      => $slug,
            'image_url'     => $this->faker->imageUrl(640,480, 'technics'),
            'votes'     => $this->faker->randomNumber(null, true),
        ];
    }
}
