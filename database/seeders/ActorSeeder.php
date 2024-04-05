<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Insert actor 1
                Actor::create([
                    'first_name' => 'Tom',
                    'last_name' => 'Hanks',
                    'age' => 65,
                    'sex' => 'Male',
                    'country' => 'USA',
                    'has_won_awards' => true,
                ]);
        
                // Insert actor 2
                Actor::create([
                    'first_name' => 'Meryl',
                    'last_name' => 'Streep',
                    'age' => 72,
                    'sex' => 'Female',
                    'country' => 'USA',
                    'has_won_awards' => true,
                ]);
    }
}
