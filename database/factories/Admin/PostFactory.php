<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'title' => fake()->text($maxNbChars = 80),
            'slug' => Str::of(fake()->text($maxNbChars = 80))->slug('-'),
            'text' => fake()->text($maxNbChars = 180),
            'author' => fake()->name(),
            'publication_date' => fake()->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'status' => fake()->boolean(),
            'category_posts_id' => 1
        ];
    }
}
