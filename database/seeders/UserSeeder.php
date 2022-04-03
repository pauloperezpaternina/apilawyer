<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name' => 'Paulo Perez Paternina',
            'email' => 'pauloperez@bittronic.net',
            'password' => bcrypt('3174397349'),
            'active' => true
        ]);
        User::factory(10)->create();
    }
}
