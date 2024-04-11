<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'     => $this->faker->sentence(5),
            'slug'      => $this->faker->slug(),
            'excerpt'   => $this->faker->sentence(8),
            'body'      => collect(fake()->paragraphs(mt_rand(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode(' '),
            'user_id'   => 1,
        ];
    }
}
