<?php

namespace App\Http\Controllers\Technology_position;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(): View {

        $user = DB::table('users')->get();

        return view('Tech.employee', ['users' => $user]);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }
}
