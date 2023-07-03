<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //0 --> First table
        DB::table('positions')->insert([
            'name'  => 'Type of positions',
            'order' => null,
            'table_id' => 0
        ]);
        //1
        DB::table('positions')->insert([
            'name'      => 'CEO',
            'order'     => 1,
            'table_id'  => 0
        ]);
        //2
        DB::table('positions')->insert([
            'name'      => 'Presidente',
            'order'     => 2,
            'table_id'  => 0
        ]);
        //3
        DB::table('positions')->insert([
            'name'      => 'Diretor',
            'order'     => 3,
            'table_id'  => 0
        ]);
        //4
        DB::table('positions')->insert([
            'name'      => 'Gerente',
            'order'     => 4,
            'table_id'  => 0
        ]);
        //5
        DB::table('positions')->insert([
            'name'      => 'Coordenador',
            'order'     => 5,
            'table_id'  => 0
        ]);
        //6
        DB::table('positions')->insert([
            'name'      => 'Analista',
            'order'     => 6,
            'table_id'  => 0
        ]);
        //7
        DB::table('positions')->insert([
            'name'      => 'Assistente',
            'order'     => 7,
            'table_id'  => 0
        ]);
        //8
        DB::table('positions')->insert([
            'name'      => 'Estagiário',
            'order'     => 8,
            'table_id'  => 0
        ]);
    }
}
