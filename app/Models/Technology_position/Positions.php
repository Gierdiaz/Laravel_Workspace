<?php

namespace App\Models\Technology_position;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Positions extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $fillable = ['name', 'position', 'order', 'table_id'];

    public static function ListOfPostion($table) {

        $position = DB::table('positions as positions_tech', 'positions.table_id', '=', 'positions_tech.id')
            ->select('positions.*')
            ->when($table, function ($query, $table) {
                return $query->where('positions', $table);
            })
            ->get();

        return $position;
    }




}
