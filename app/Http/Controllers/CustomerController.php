<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list() {

        $customers = [
            'Viturino',
            'Carolino',
            'Granados',
            'Michelle'
        ];
    
        return view('Internals.customers', [
            'customers' => $customers,
        ]);
    }
}
