<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = Director::all();
        $directors->each(function($director) {
            Movie::factory()->count(3)->create([
                'director_id' => $director->id
            ]);
        });
    }
}
