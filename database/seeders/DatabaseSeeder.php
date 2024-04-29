<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Liu Purnomo',
            'email' => 'hi@liupurnomo.com',
            'password' => Hash::make('password'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. Ikat Digital Indonesia',
            'email' => 'hi@liupurnomo.com',
            'address' => 'Jl. Pejompongan IIIA / 11',
            'latitude' => '-6.2039926697805345',
            'longitude' => '106.8043850800103',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
