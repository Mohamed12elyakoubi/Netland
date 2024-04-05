<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // First piece of media
        Media::create([
            'title' => 'The Matrix',
            'rating' => 'PG-13',
            'length_in_minutes' => 136,
            'released_at' => '1999-03-31',
            'country_of_origin' => 'USA',
            'youtube_trailer_id' => 'K-FXxE6KX7M',
            'summary' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'spoken_in_language' => 'English',
            'media_type' => 'movie',
        ]);

        // Second piece of media
        Media::create([
            'title' => 'Friends',
            'rating' => 'TV-14',
            'length_in_minutes' => 22,
            'released_at' => '1994-09-22',
            'country_of_origin' => 'USA',
            'youtube_trailer_id' => 'X2fz3B8OWwA',
            'summary' => 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.',
            'spoken_in_language' => 'English',
            'media_type' => 'series',
        ]);
        
    }
}
