<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'rating' => $this->faker->randomElement(['G', 'PG', 'PG-13', 'R']),
            'length_in_minutes' => $this->faker->numberBetween(60, 240),
            'released_at' => $this->faker->date(),
            'country_of_origin' => $this->faker->country,
            'youtube_trailer_id' => $this->faker->lexify('???????????'),
            'summary' => $this->faker->paragraph,
            'spoken_in_language' => $this->faker->languageCode,
            'media_type' => $this->faker->randomElement(['movie', 'series']),
        ];
    }
}
