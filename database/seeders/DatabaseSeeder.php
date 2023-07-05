<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employees;
use App\Models\Invoices;
use App\Models\User;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Invoices::factory(20)->create();
        Employees::factory(20)->create();

       $this->call([
            PositionsSeeder::class
        ]);


    }
}
