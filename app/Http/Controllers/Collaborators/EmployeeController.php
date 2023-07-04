<?php

namespace App\Http\Controllers\Collaborators;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(): View {

        $employee = DB::table('employees')->get();
        
        return view('Tech.employee', ['employees' => $employee]);
        
    }


}
