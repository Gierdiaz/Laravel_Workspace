<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}


<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//year_school		
		// 1
		DB::table('school_years')->insert([
			'name'		=> '2023',
			'start'		=> '2023-02-06',
			'end' 		=> '2023-12-15',
			'school_id'	=> 1
		]);
		
		// 2
		DB::table('school_years')->insert([
			'name'		=> '2023',
			'start'		=> '2023-02-06',
			'end' 		=> '2023-12-15',
			'school_id'	=> 2
		]);
		
		// 3
		DB::table('school_years')->insert([
			'name'		=> '2023',
			'start'		=> '2023-02-06',
			'end' 		=> '2023-12-15',
			'school_id'	=> 3
		]);
    }
}
