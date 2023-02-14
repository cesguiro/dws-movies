<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = 'user';
        $user->password = bcrypt('user');
        $user->save();
        /*$user = new User();
        $user->username = 'user';
        $user->password = bcrypt('user');
        $user->save();*/
    }
}
