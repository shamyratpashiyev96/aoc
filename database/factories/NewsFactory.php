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
            'title_tm' => 'tm_' . fake()->paragraph(),
            'title_ru' => 'ru_' . fake()->paragraph(),
            'title_en' => 'en_' . fake()->paragraph(),
            'description_tm' => 'tm_' . fake()->realTextBetween(500,700),
            'description_ru' => 'ru_' . fake()->realTextBetween(500,700),
            'description_en' => 'en_' . fake()->realTextBetween(500,700),
            'image' => 'img/news_medium_' . fake()->randomDigit() . '.jpg',
        ];
    }
}
