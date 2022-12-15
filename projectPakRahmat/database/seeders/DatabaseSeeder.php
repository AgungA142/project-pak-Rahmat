<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CplMatButuhOpr::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Agung Alfatah',
        //     'username' => 'AgungA',
        //     'email' => 'agung.alfatah43@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::factory(3)->create();
    }
}
