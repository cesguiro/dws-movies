<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorsMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movie::all();

        // Populate the pivot table
        Actor::all()->each(function ($actor) use ($movies) { 
            $actor->movies()->attach(
                $movies->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
