<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pages;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aziz',
            'phone' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        Pages::create([
            'name' => 'about',
            'description' => ''
        ]);
        Pages::create([
            'name' => 'services',
            'description' => ''
        ]);
        Pages::create([
            'name' => 'contacts',
            'description' => ''
        ]);
        Pages::create([
            'name' => 'printed',
            'description' => ''
        ]);
        Pages::create([
            'name' => 'information',
            'description' => ''
        ]);
    }
}
