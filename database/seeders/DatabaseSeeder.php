<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Invoices::factory(20)->create();
        \App\Models\Employees::factory(20)->create();

       $this->call(PositionsSeeder::class);

    }
}
