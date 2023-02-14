<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(DirectorsSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(ActorsSeeder::class);
        $this->call(ActorsMoviesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
