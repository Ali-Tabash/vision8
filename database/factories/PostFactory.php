<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake()->word(4,true), // true عشان ايكونوا كلمة واحدة وليس مصفوفة
            'content'=>fake()->text(),
            'image'=> fake()->imageUrl()
        ];
    }
}
