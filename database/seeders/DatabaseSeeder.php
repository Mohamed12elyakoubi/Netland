<?php

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Media;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 actors
        Actor::factory()->count(1000)->create();

        // Create 5 media
        Media::factory()->count(200)->create();

        // Retrieve media and actors from the database
        $media = Media::all();
        $actors = Actor::all();

        // Attach actors to media
        foreach ($media as $medium) {
            // Attach random actors to each medium
            $medium->actors()->attach($actors->random(rand(1, 20))->pluck('id')->toArray());
        }
    }
}
