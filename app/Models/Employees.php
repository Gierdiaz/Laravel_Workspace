<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = ['user_id', 'position_id'];

    public static function ListEmployee() {
        $employee = DB::table('employees')
            ->join('employees', 'positions.id', '=', 'employees.position_id')
            ->join('employees', 'users.id', '=', 'employees.user_id')
            ->select('employees*.', 'positions.name as position_name')
            ->get();

        return $employee;
    }
}
