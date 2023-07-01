<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    //Validation on the controller -> Validação na controller
    public function store(Request $request) {
        //We can do the authorization verification in two ways: This 
        if(!$request->user()->can('isAdmin', 'App\Models\Invoices')) {
            abort(403);
        };

        //or this.
        $this->authorize('isAdmin', Invoices::class);
    }

} 

