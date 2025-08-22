<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Kalau mau generate user dummy:
        // \App\Models\User::factory(10)->create();

        // Buat 1 user default
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Panggil semua seeder lain
        $this->call([
            LayananSeeder::class,
            PerizinanSeeder::class,
        ]);
    }
}
