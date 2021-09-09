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
        User::Create([
            'name'=>'Patricio Aguilar V',
            'email'=>'patrickaguilar2403@gmail.com',
            'password'=>bcrypt('arrosconleche77')
        ])->assignRole('admin');

        User::factory(99)->create();
    }
}
