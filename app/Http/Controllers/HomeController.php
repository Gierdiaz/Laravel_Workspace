<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        //auth()->loginUsingId(1);
        //auth()->logout();
        $invoice = Invoices::with('user')->get();

        return view('Invoice.invoice', [
           'invoice' => $invoice 
        ]);
    }
}
