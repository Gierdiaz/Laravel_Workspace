<?php

namespace App\Models\Collaborators;

use App\Models\Technology_position\Positions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = ['user_id', 'position_id'];

    public static function ListEmployee() {
        $employee = DB::table('employees', 'users.id', '=', 'employees.user_id')
            ->join('positions', 'employees.position_id', '=', 'positions.id')
            ->select('employees*.', 'positions.name as position_name')
            ->get();

        return $employee;
    }
}
