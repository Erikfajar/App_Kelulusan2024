<?php

namespace Database\Seeders;

use App\Models\Setings;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\DataTaruna::factory(600)->create();

        User::create([
        'username' => 'admin',
        'password' => bcrypt('password123'),
        'password_view' => 'password123'
        ]);
        
        Setings::create([
            'opsi' => 'tutup'
        ]);
    }
}
